<html>
<meta name="csrf_token" id="token" content="csrf_token()">
<head>
   <title>Ajax Example</title>

   <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>

   <script>
      $.ajaxSetup({

       headers: {

         'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')

      }

   });
      function getMessage(){
         $.ajax({
            type:'POST',
            url:'/getmsg',
            data:'_token = <?php echo csrf_token() ?>',
            success:function(data){
               $("#msg").html(data.msg);
            }
         });
      }
   </script>
</head>

<body>
   <div id = 'msg'>This message will be replaced using Ajax. 
   Click the button to replace the message.</div>
     <?php
         echo Form::button('Replace Message',['onClick'=>'getMessage()']);
      ?>
</div>
</body>

</html>