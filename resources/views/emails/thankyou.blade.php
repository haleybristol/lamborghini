<style>
    * {
    box-sizing: border-box;
    }
    body {
    margin: 0;
    }
    img {
        height: 80px;
    }
    .content {
        min-height: calc(100vh - 100px);
    }
    nav, footer {
        background-color: rgba(0,0,0,0.8);
        width: 100%;
        color: white;
        height: 100px;
    }
    footer {
        margin-top: -100px;
    }
    .container {
        margin: 0 auto;
        max-width: 520px;
    }
    .flex {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    a {
        color: white;
        text-decoration: underline;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<nav>
    <div class="flex">
        <img src="{{ asset('img/lambo-logo.png') }}">
    </div>
</nav>
<div class="container content">
    <h1>{!! trans('email.hi') !!} {{ $dealer }}, </h1>
    <p>{!! trans('email.copy') !!}</p>
    <table>
        <tr>
            <td>First Name</td>
            <td>{{ $firstname }}</td>   
        </tr>
        <tr>
            <td>Last Name</td> 
            <td>{{ $lastname }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $email }}</td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>{{ $phone }}</td>
        </tr>
        <tr>
            <td>Country/Region</td>
            <td>{{ $country }}</td>
        </tr>
    </table>
</div>
<footer>
  <div class="container flex">
    <div>
      <p>Copyright ©2018 Automobili Lamborghini S.p.A. a sole shareholder company part of Audi Group. All rights reserved. VAT no. IT 00591801204</p>
      <a href="https://www.lamborghini.com/en-en/privacy-legal" target="_blank">Privacy Policy</a>
    </div>
  </div>
</footer>
