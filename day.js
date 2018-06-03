
var year = document.querySelector('#bs_year').value-2000,
    month = document.querySelector('#bs_month').value;

var opt = document.querySelector('#bs_day');

var days = parseInt(globalVariable.date[year][month]);

for(var j=1;j<=days;j++){
    opt.options[opt.options.length] = new Option(j,j);
    }

    document.querySelector('#bs_month').onchange = changeHandler;

    function changeHandler(){
        
        year = document.querySelector('#bs_year').value-2000,
        month = document.querySelector('#bs_month').value;

        for(i=0;i<=days;i++){
            
            opt.remove(0);
            
            }
            
        days = parseInt(globalVariable.date[year][month]);
        
        
            for(var i=1;i<=days;i++){
                opt.options[opt.options.length] = new Option(i,i);
                }

    }


