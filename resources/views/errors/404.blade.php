<!DOCTYPE html>
<html>
    <style>
        #fakebg{
            width: 100% !important;
            height: 100% !important;
            background-color: #04043C;
        }
        ::-webkit-scrollbar {
            display: none;
        }
        #fondo{
            position:absolute !important; 
            z-index:1 !important; 
            width:100% !important;
        }
    </style>
    <div id="fakebg">
        <img id="fondo" src="{{ asset('img/error/404.jpg') }}">
    </div>
</html>
