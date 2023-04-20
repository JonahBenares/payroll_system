function salary_computation(sal_type, ps_id, x){
    var counter = document.getElementById("counter").value;  
   
    // for(var x=1;x<counter;x++){
        if(sal_type=='adjustment'){
           
            let sum_adjustment=0;
            let sum_less_outside=0;
            let sum_deductions=0;
            var adj_ids = document.getElementById("adjustment_ids").value;  
            var deduction_ids = document.getElementById("deduction_ids").value; 
            var less_ids = document.getElementById("less_ids").value; 
            var adj = adj_ids.split("_");

            
            adj.forEach(function(adjids) {
                var adj_val = parseFloat(document.getElementById("adjustment_"+adjids+"_"+x).value);  
               
                sum_adjustment += adj_val;
               
            });

            
            var ls = less_ids.split("_");
            ls.forEach(function(lsids) {
                var less_val = parseFloat(document.getElementById("less_gp_"+lsids+"_"+x).value);  
                sum_less_outside+=less_val;
            });

            var ded = deduction_ids.split("_");
            ded.forEach(function(dedids) {
                var ded_val = parseInt(document.getElementById("deductions_"+dedids+"_"+x).value);  
                sum_deductions+= ded_val;
            
            });
           
            document.getElementById("sum_adjustment_"+x).innerHTML = sum_adjustment;
            document.getElementById("sum_adjustment_outside_"+x).innerHTML = sum_adjustment;
            var salary = document.getElementById("salary_"+x).innerHTML; 
            var gross = (parseFloat(salary) + parseFloat(sum_adjustment)) - parseFloat(sum_less_outside);

            var netpay = parseFloat(gross) - parseFloat(sum_deductions);

            document.getElementById("gross_"+x).innerHTML = gross;
            document.getElementById("netpay_"+x).innerHTML = netpay;
        }

        if(sal_type == 'deductions'){
            let sum_deductions=0;
            let sum_adjustment=0;
            let sum_less_outside=0;
            var adj_ids = document.getElementById("adjustment_ids").value;  
            var deduction_ids = document.getElementById("deduction_ids").value;  
            var ded = deduction_ids.split("_");
            var less_ids = document.getElementById("less_ids").value; 
            var adj = adj_ids.split("_");
            
               
            // adj.forEach(function(adjids) {
            //     var adj_val = document.getElementById("adjustment_"+adjids+"_"+x).value;  
              
            //     sum_adjustment =+ adj_val;
            // });

            // var ls = less_ids.split("_");
            // ls.forEach(function(lsids) {
            //     var less_val = parseFloat(document.getElementById("less_gp_"+lsids+"_"+x).value);  
            //     sum_less_outside+=less_val;
            // });

            ded.forEach(function(dedids) {
                
                var ded_val = parseInt(document.getElementById("deductions_"+dedids+"_"+x).value);  
                sum_deductions+= ded_val;
            
            });
            
            document.getElementById("sum_deductions_"+x).innerHTML = sum_deductions;
            document.getElementById("sum_deductions_outside_"+x).innerHTML = sum_deductions;

            var salary = document.getElementById("salary_"+x).innerHTML; 
            
            var gross =  document.getElementById("gross_"+x).innerHTML;
            var netpay = parseFloat(gross) - parseFloat(sum_deductions);

            document.getElementById("gross_"+x).innerHTML = gross;
            document.getElementById("netpay_"+x).innerHTML = netpay;

        }
    //}
 }

 