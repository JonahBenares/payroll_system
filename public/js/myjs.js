function salary_computation(sal_type, ps_id){
    var counter = document.getElementById("counter").value;  

    for(var x=1;x<counter;x++){
        if(sal_type=='adjustment'){
           
            let sum_adjustment=0;
            var adj_ids = document.getElementById("adjustment_ids").value;  
            var adj = adj_ids.split("_");

            
            adj.forEach(function(adjids) {
                var adj_val = document.getElementById("adjustment_"+adjids+"_"+x).value;  
                console.log(adj_val);
                sum_adjustment =+ adj_val;
            });

            document.getElementById("sum_adjustment_"+x).innerHTML = sum_adjustment;
            document.getElementById("sum_adjustment_outside_"+x).innerHTML = sum_adjustment;
        }

        if(sal_type == 'deductions'){
            let sum_deductions=0;
            var deduction_ids = document.getElementById("deduction_ids").value;  
            var ded = deduction_ids.split("_");
        
            ded.forEach(function(dedids) {
                
                var ded_val = parseInt(document.getElementById("deductions_"+dedids+"_"+x).value);  
            

                sum_deductions+= ded_val;
            
            });
            
            document.getElementById("sum_deductions_"+x).innerHTML = sum_deductions;
            document.getElementById("sum_deductions_outside_"+x).innerHTML = sum_deductions;
        }
    }
 }

 $(document).ready(function() {
   
    var counter = document.getElementById("counter").value;  
    var deduction_ids = document.getElementById("deduction_ids").value; 
    var less_ids = document.getElementById("less_ids").value; 

   
    var adjustment_ids = document.getElementById("adjustment_ids").value; 
    for(var x=1;x<counter;x++){
        let sum_deductions_outside=0;
        let sum_less_outside=0;
        let sum_adjustment_outside=0;
       
        var salary = document.getElementById("salary_"+x).innerHTML; 

        

        var ded = deduction_ids.split("_");
        ded.forEach(function(dedids) {
            var ded_val = parseFloat(document.getElementById("deductions_"+dedids+"_"+x).value);  
            sum_deductions_outside+=ded_val;
        });


        var ls = less_ids.split("_");
        ls.forEach(function(lsids) {
            var less_val = parseFloat(document.getElementById("less_gp_"+lsids+"_"+x).value);  
            sum_less_outside+=less_val;
        });


        var adj = adjustment_ids.split("_");
        adj.forEach(function(adjids) {
            var adj_val = parseFloat(document.getElementById("adjustment_"+adjids+"_"+x).value);  
            sum_adjustment_outside+=adj_val;
        });

        document.getElementById("sum_deductions_"+x).innerHTML = sum_deductions_outside;
        document.getElementById("sum_lessgp_outside_"+x).innerHTML = sum_less_outside;
        document.getElementById("sum_deductions_outside_"+x).innerHTML = sum_deductions_outside;
        document.getElementById("sum_adjustment_"+x).innerHTML = sum_adjustment_outside;
        document.getElementById("sum_adjustment_outside_"+x).innerHTML = sum_adjustment_outside;

       var gross = (parseFloat(salary) + parseFloat(sum_adjustment_outside)) - parseFloat(sum_less_outside);
       var netpay = parseFloat(gross) - parseFloat(sum_deductions_outside);

        document.getElementById("gross_"+x).innerHTML = gross;
        document.getElementById("netpay_"+x).innerHTML = netpay;
    }
 });