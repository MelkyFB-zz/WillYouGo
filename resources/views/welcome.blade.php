@extends('layouts.main')
<?php
use Phelium\Component\reCAPTCHA;

$reCAPTCHA = new reCAPTCHA('6LfLHRwUAAAAAGKC1EAbFEgUXNXcEoOBvFQlo8wb', '6LfLHRwUAAAAAMYB7dGFJjnhoQtTzyOGrDto3rc0');
$reCAPTCHA->setTheme('dark');
?>
@section('content')
<form action="/confirm" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <input type="text" id="name" name="name" placeholder="Name" required/>
    </div>
    <div class="form-group">
        <h3>Will You Go?</h3>
        <div class="radio">
            <label>
                <input type="radio" name="response" checked id="resp_yes" value="resp_yes">
                Yes
            </label>
            <label>
                <input type="radio" name="response" id="resp_maybe" value="resp_maybe">
                Maybe
            </label>
            <label>
                <input type="radio" name="response" id="resp_no" value="resp_no">
                No
            </label>
        </div>
    </div>
    <div class="form-group">
        <?= $reCAPTCHA->getHtml(); ?>
    </div>
    <div class="form-group">
        <input type="submit" value="Send Response" class='btn btn-primary'></input>
    </div>
</form>
@endsection