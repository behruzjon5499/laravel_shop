<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

{{$slot}}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif
    }

    body {
        height: 100vh;
        background: linear-gradient(to top, #c9c9ff 50%, #9090fa 90%) no-repeat
    }

    .container {
        margin: 50px auto
    }

    .panel-heading {
        text-align: center;
        margin-bottom: 10px
    }

    #forgot {
        min-width: 100px;
        margin-left: auto;
        text-decoration: none
    }

    a:hover {
        text-decoration: none
    }

    .form-inline label {
        padding-left: 10px;
        margin: 0;
        cursor: pointer
    }

    .btn.btn-primary {
        margin-top: 20px;
        border-radius: 15px
    }

    .panel {
        min-height: 380px;
        box-shadow: 20px 20px 80px rgb(218, 218, 218);
        border-radius: 12px
    }

    .input-field {
        border-radius: 5px;
        padding: 5px;
        display: flex;
        align-items: center;
        cursor: pointer;
        border: 1px solid #ddd;
        color: #4343ff
    }

    input[type='text'],
    input[type='password'] {
        border: none;
        outline: none;
        box-shadow: none;
        width: 100%
    }

    .fa-eye-slash.btn {
        border: none;
        outline: none;
        box-shadow: none
    }

    img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 50%;
        position: relative
    }

    a[target='_blank'] {
        position: relative;
        transition: all 0.1s ease-in-out
    }

    .bordert {
        border-top: 1px solid #aaa;
        position: relative
    }

    .bordert:after {
        content: "or connect with";
        position: absolute;
        top: -13px;
        left: 33%;
        background-color: #fff;
        padding: 0px 8px
    }

    @media(max-width: 360px) {
        #forgot {
            margin-left: 0;
            padding-top: 10px
        }

        body {
            height: 100%
        }

        .container {
            margin: 30px 0
        }

        .bordert:after {
            left: 25%
        }
    }
</style>
