<!DOCTYPE html>
<html lang="en">
<head>
    <title>WEB USING JQuery</title>
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <br><br>
    <div class="container">
        <center>
            <h1 style="color:red;">Book Your Ticket</h1>
            <input type="text" width="100px" placeholder="Enter Your Email"> 
            <br><br>
            <input type="text" name="name" placeholder="Enter your Name">
            <br><br>
            <input type="date" name="date" placeholder="Enter your age"><br><br>
            <select name="genere" id="genere">
                <option value="">Select Genere</option>
            </select>
            <br><br>
            <select name="movie" id="movie">
                <option value="">Select Movie</option>
            </select>
            <br><br>
            <button style="background-color:green; color:whitesmoke;">Book Ticket</button>
        </center>
    </div>
</body>
</html>
<script>
$(document).ready(function(){

    load_json_data('genere');

    function load_json_data(id, p_id)
    {
        var html_code = '';
        $.getJSON('movie.json', function(data){

            html_code += '<option value="">Select '+id+'</Option>';
            $.each(data, function(key, value){
                if(id == 'genere')
                {
                    if(value.p_id == '0')
                    {
                        html_code += '<option value="'+value.id+'">'+value.name+'</option>';
                    }
                }
                else
                {
                    if(value.p_id == p_id)
                    {
                        html_code += '<option value="'+value.id+'">'+value.name+'</option>';
                    }
                }

            });
            $('#'+id).html(html_code);
        });
    }
    $(document).on('change','#genere', function(){
        var g_id = $(this).val();
        if(g_id != '')
        {
            load_json_data('movie',g_id);
        }
        else
        {
            $('#movie').html('<option value="">Select Movie</option>');
        }
    });
});
</script>