<div style="background-color: rgba(0,0,0,0.8);width: 100%;color: white;height: 100px;">
    <div style="text-align:center;">
        <img style="height: 80px; padding-top: 10px;" src="https://www.lamborghini.com/themes/custom/lambo/img/base/logo.png">
    </div>
</div>
<div style="margin: 0 auto; width: 520px; min-height: 100%">
    <h1>{!! trans('email.hi') !!} {{ $contactName }}, </h1>
    <p style="font-size: 18px;">{!! trans('email.copy') !!}</p>
    <table style="border-collapse: collapse;width: 100%;">
        <tr>
            <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">First Name</td>
            <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $firstname }}</td>   
        </tr>
        <tr style="background-color: #dddddd;">
            <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Last Name</td> 
            <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $lastname }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Email</td>
            <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $email }}</td>
        </tr>
        <tr style="background-color: #dddddd;">
            <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Phone Number</td>
            <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $phone }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Country/Region</td>
            <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $country }}</td>
        </tr>
        <tr style="background-color: #dddddd;">
            <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Dealership</td>
            <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $dealer }}</td>
        </tr>
    </table>
    <div style="text-align: center; margin: 50px 0;">
        <a style="background: #e0b401; color: white; text-decoration: none; text-transform: uppercase; padding: 10px 20px;" href="mailto:{{ $email }}">Respond to lead</a>
    </div>
</div>
<footer style="background-color: rgba(0,0,0,0.8);width: 100%;color: white; padding: 10px;">
  <div style="margin: 0 auto; max-width: 520px; font-size: 14px">
      <p>Copyright ©2018 Automobili Lamborghini S.p.A. a sole shareholder company part of Audi Group. All rights reserved. VAT no. IT 00591801204</p>
      <a style="color: white; text-decoration: underline;" href="https://www.lamborghini.com/en-en/privacy-legal" target="_blank">Privacy Policy</a>
  </div>
</footer>
