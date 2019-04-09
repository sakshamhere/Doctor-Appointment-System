
// document.querySelector('.s').addEventListener('keydown',result);

// function result(e)
// {
//   let val =e.target.value;
 

  // <?php 
   
  //  $conn = new mysqli("localhost:3306","root","","dasdatabase");

  //  $sql ="select name from doctor register where name LIKE "val%"";

  //  $result =conn->query($sql);

  //  $row = $result->fetch_assoc();

// var ul =document.querySelectorAll('.li');
// // var ul=document.querySelector('ul.ul');
//      var va=ul.children;
//      console.log(ul.length) ;
     

   
   //document.querySelector('h5').innerText=;
   // document.querySelector('h5').innerText=<?php $row[name] ?>;

  //console.log(va);
// }

// document.querySelectorAll('li.li').addEventListener('click',result);

// function result(e)
// {
//    var v =e.target;
//    console.log(v);
//    // document.querySelector('.s').value=v;
// });


  function change(e)
  {
    var val=e.innerText;
    document.querySelector('.s').value=val;
    var x= document.querySelector('ul.ul');
    for(var i=0;i<x.children.length;i++)
    {
    	x.children[i].style.display="none";
    }
     
    console.log();
  }




   
  var x= document.querySelector('ul.ul');
    for(var i=0;i<x.children.length;i++)
    {
    	x.children[i].style.display="none";
    }
    

function filter()
{
	var input=document.querySelector('.s').value;
  //  var ul=document.querySelectorAll('.li');
  //   console.log(input);
     var d=document.querySelector('ul.ul');
    
    var ul=d.children;

    for(var i=0;i<ul.length;i++)
    {

      

    	var v=d.children[i].innerText;

         

         if(v.indexOf(input) <= -1)
         {
         	console.log("no");
         	d.children[i].style.display="none";
         }
         //  if(input=d.children[i])
         // {
         // 	console.log("match");
         // 	//console.log(input.toUpperCase().indexOf(v));
         // }
          if(v.indexOf(input) > -1)
         {
         	
         	d.children[i].style.display="";
         }
     
    }


}


document.querySelector('.clear').addEventListener('click',clear);

function clear()
{
	
	

	var x= document.querySelector('ul.ul');
    for(var i=0;i<x.children.length;i++)
    {
    	x.children[i].style.display="none";
    }
}

