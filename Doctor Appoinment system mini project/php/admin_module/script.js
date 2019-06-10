
var v=document.querySelector('.row');

var va  =v.children;
console.log(va.length);

for(var i=0;i<va.length;i++)
{
	 console.log(va[i]);
	 va[i].style.display="none";
	 // var val = v[i].target;
	 // val.style.display="none";
	
}


function check(e)
{
	alert("works");
	var val=e.target;
	val.style.display="none";
}


document.querySelector('.s').addEventListener('keyup',result);

function result(e)
{
	var v=document.querySelector('.row');

    // var c=v.children[1];
    // //console.log(c);
    // var d=c.children[0];
    //   console.log(d);
     var val =e.target.value;
    var b =v.children;
    for(var i=0;i<b.length;i++)
   {
     

    var d=v.children[i].children[0].children[0];
     var text =d.innerText;
     if(text.indexOf(val)> -1)
     {
     	b[i].style.display="";
     }
     
     if(text.indexOf(val) <=-1)
     {
     	b[i].style.display="none";
     }
	
   } 
    // for(var i=0;i<va.length;i++)
    // {
         
    // 	 var n=va[i].children;
          

    //       console.log(n);


    //	if(val.indexOf())
    



	//console.log(val);
	//document.querySelector('h5').innerText=val;
}



