@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h2>Job Application Form</h2>
<form action="{{route('add_job')}}" id="EmploymentApplication100" method="post">

@csrf
<table border="0" cellpadding="5" cellspacing="0">
<tr> <td style="width: 50%">
<label for="First_Name"><b>First name *</b></label><br />
<input name="fname" type="text" maxlength="50" style="width:100%;max-width: 260px" required/>
</td> <td style="width: 50%">
<label for="lname"><b>Last name *</b></label><br />
<input name="lname" type="text" maxlength="50" style="width:100%;max-width: 260px" required/>
</td> </tr> <tr> <td colspan="2">
<label for="Email_Address"><b>Email *</b></label><br />
<input name="email" type="email" maxlength="100" style="width:100%;max-width: 535px" required/>
</td> </tr> <tr> <td colspan="2">
<label for="Portfolio"><b>Highest qualification</b></label><br />
<input name="qual" type="text" maxlength="255" value="" style="width:100%;max-width: 535px" required/>
</td> </tr> <tr> <td colspan="2">
<label for="Position"><b>Position you are applying for:  Project Assistant</b></label><br />
<input name="position" type="hidden" maxlength="" style="width:100%;max-width: 535px" value="Project Assistant"/>
</td> </tr>  <tr> <td>
<label for="Phone"><b>Phone *</b></label><br />
<input name="phone" type="text" maxlength="" style="width:100%;max-width: 260px" required/>
</td> 
</td> </tr>
<tr> <td>

<input name="submit" type="submit"  style="width:100%;max-width: 260px" />
</td> 
</td> </tr>
</table>
</form>