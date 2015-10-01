GK = new Array(null,null);
DF = new Array(null,null,null,null,null);
MF = new Array(null,null,null,null,null);
FW = new Array(null,null,null);
	
function myFunction() {
    selected=document.getElementById("formation").value;
    if(selected==442)
	  {document.getElementById("formimage").src="http://i.imgur.com/aN42IoQ.png";
	   document.getElementById("DF4").disabled=false;
	   document.getElementById("DF5").disabled=true;
	   document.getElementById("MF4").disabled=false;
	   document.getElementById("MF5").disabled=true;
	   document.getElementById("FW2").disabled=false;
	   document.getElementById("FW3").disabled=true;
	   }
	if(selected==451)
	  {document.getElementById("formimage").src="http://i.imgur.com/Puje3pQ.png";
	   document.getElementById("DF4").disabled=false;
	   document.getElementById("DF5").disabled=true;
	   document.getElementById("MF4").disabled=false;
	   document.getElementById("MF5").disabled=false;
	   document.getElementById("FW2").disabled=true;
	   document.getElementById("FW3").disabled=true;
	  }
	if(selected==433)
	  {document.getElementById("formimage").src="http://i.imgur.com/bJXVB6v.png";
	   document.getElementById("DF4").disabled=false;
	   document.getElementById("DF5").disabled=true;
	   document.getElementById("MF4").disabled=true;
	   document.getElementById("MF5").disabled=true;
	   document.getElementById("FW2").disabled=false;
	   document.getElementById("FW3").disabled=false;
	   }
	if(selected==352)
	  {document.getElementById("formimage").src="http://i.imgur.com/Ceh64ye.png";
	   document.getElementById("DF4").disabled=true;
	   document.getElementById("DF5").disabled=true;
	   document.getElementById("MF4").disabled=false;
	   document.getElementById("MF5").disabled=false;
	   document.getElementById("FW2").disabled=false;
	   document.getElementById("FW3").disabled=true;
	}   
}
