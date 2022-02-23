<script>
            
    $(document).ready(function(){
        $(".rdeaaward").submit(function(){
    		if ($('input:checkbox').filter(':checked').length < 1){
            alert("Select minimum one  category for nominating awards");
    		return false;
    		}
        });
    });
        
</script>
   
<script>
   $(document).ready(function(){
    const selectedElm = document.getElementById('selected');
    var a= 0;
    var total=0;
    function showChecked(){
  var a=selectedElm.innerHTML = document.querySelectorAll('input[type=checkbox]:checked').length;
 var total = a * 8260;
     console.log(total);
      document.getElementById("amtfield").value = total ;
    }
    
  document.querySelectorAll("input[type=checkbox]").forEach(i=>{
     i.onclick = () => showChecked();
     
    });
    
   });
</script>

<script>
        
          $(document).on('change',".gstinnumber", function(){    
            var inputvalues = $(this).val();
            var gstinformat = new RegExp('^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$');
            
            if (gstinformat.test(inputvalues)) {
             return true;
            } else {
                alert('Please Enter Valid GSTIN Number');
                $(".gstinnumber").val('');
                $(".gstinnumber").focus();
            }
            
        });
        
    </script> 
        
