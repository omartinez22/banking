<h3>Investment Details</h3>
<hr/>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'investment/'.$account->getid())) }}
                                {{ Form::hidden('_method', 'PUT') }}
    <div class="form-group">
            Created On : {{ $account->getCreateTime()->format("Y-m-d") }}
    </div>

    <div class="form-group">
            Term Type : {{ $account->getTermType() }}
    </div>
    
    <div class="form-group">
            Term Length :
            {{ $account->getTermLength() }}
    </div>

    <div class="form-group">
            Amount :
            {{ $account->getAmount() }}
    </div>
    
    <div class="form-group">
            Interst Rate :
            {{ $account->getInterestRate() }} %
    </div>

    <div class="form-group">
            Maturity Date :
            {{ $account->getMaturityDate()->format("Y-m-d") }}
    </div>
    
    <div class="form-group">
            {{ Form::label('to', 'Amount') }}
            {{ Form::text('amount', $account->getAmount(), array('class' => 'form-control')) }}
    </div>  
    
    <div class="form-group">
            {{ Form::label('to', 'To Account') }}
            {{ Form::select('to_account', $to, Input::old('to_account'), array('class' => 'form-control')) }}
    </div>                            
    <br/>
    @if($account->isMatured())
            <div class="form-group">
            Interst Total :
            {{ $account->getInterestTotal() }} CAD
    </div>
        {{ Form::submit('Redeem!', array('class' => 'btn btn-primary')) }}
    @else
        {{ Form::submit('Redeem Without Interest!', array('class' => 'btn btn-primary')) }}
    @endif
    
    {{ HTML::link('investment', "Back", array('class' => 'btn btn-success') ) }}

{{ Form::close() }}

