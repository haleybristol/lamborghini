<style>
  body {
   margin:0;
   padding:0;
  }
</style>
<div style="background-color: #333333; width: 100%;color: white;height: 100px;">
    <div style="text-align:center;">
        <img style="height: 80px; width: 80px; padding-top: 10px;" src="https://www.lamborghini.com/themes/custom/lambo/img/base/logo.png">
    </div>
</div>
<div style="margin-top: 60px;">
    <table align="center" style="width: 520px;">
        <tr><td><h1 >{!! trans('email.hi') !!} {{ $contactName }}, </h1></td></tr>
        <tr><td><p style="font-size: 18px;">{!! trans('email.copy') !!}</p></td></tr>
    </table>
    <div align="center" style="width: 520px; margin: 0 auto;">
        <table style="border-collapse: collapse; width: 520px;">
            <tr>
                <td style="border:  1px solid #B1B1B1; text-align: left; padding: 8px;">First Name</td>
                <td style="border:  1px solid #B1B1B1; text-align: left; padding: 8px;">{{ $firstname }}</td>   
            </tr>
            <tr style="background-color: #dddddd; background: #dddddd;">
                <td style="border:  1px solid #B1B1B1; text-align: left; padding: 8px;">Last Name</td> 
                <td style="border:  1px solid #B1B1B1; text-align: left; padding: 8px;">{{ $lastname }}</td>
            </tr>
            <tr>
                <td style="border:  1px solid #B1B1B1; text-align: left; padding: 8px;">Email</td>
                <td style="border:  1px solid #B1B1B1; text-align: left; padding: 8px;">{{ $email }}</td>
            </tr>
            <tr style="background-color: #dddddd; background: #dddddd;">
                <td style="border:  1px solid #B1B1B1; text-align: left; padding: 8px;">Phone Number</td>
                <td style="border:  1px solid #B1B1B1; text-align: left; padding: 8px;">{{ $phone }}</td>
            </tr>
            <tr>
                <td style="border:  1px solid #B1B1B1; text-align: left; padding: 8px;">Country/Region</td>
                <td style="border:  1px solid #B1B1B1; text-align: left; padding: 8px;">{{ $country }}</td>
            </tr>
            <tr style="background-color: #dddddd; background: #dddddd;">
                <td style="border:  1px solid #B1B1B1; text-align: left; padding: 8px;">Dealership</td>
                <td style="border:  1px solid #B1B1B1; text-align: left; padding: 8px;">{{ $dealer }}</td>
            </tr>
        </table>
    </div>
    <div style="margin-bottom: 30px">&nbsp;</div>
    <table align="center" cellpadding="12" width="220px">
        <tr style="background: #e0b401; width: 100%; text-align: center;">
            <td><a style="text-decoration: none; color: white; text-transform: uppercase;" href="mailto:{{ $email }}">Respond to lead</a></td>
        </tr>
    </table>
    <div style="margin-bottom: 60px">&nbsp;</div>
</div>

<table cellpadding="50" cellspacing="0" border="0" width="100%">
    <tr style="background-color: #333333;width: 100%;color: white;">
        <td>Copyright ©2018 Automobili Lamborghini S.p.A. a sole shareholder company part of Audi Group. All rights reserved. VAT no. IT 00591801204</td>
        <td><a style="color: white; text-decoration: underline;" href="https://www.lamborghini.com/en-en/privacy-legal" target="_blank">Privacy Policy</a></td>
    </tr>
</table>
