/*
  JavaScript code to validate submitResultForm.html for the Open University TT284 Web technologies TMA02
  This file validates the Runner ID, Event ID, Date, Finish Time, Position, Category ID, Age Grade, Personal Best input fields from
  submitResultForm.html
  Author Leire Larrea Casado (E1662175)
  Version 1.1 (January 2017)
 */


function validaterid()
{
	if(document.getElementById("rid").value >= 1 && document.getElementById("rid").value <= 9999 && !/^([0-99])*$/.test(document.getElementById("rid").value))
	{
	    return true;
	}
	else
	{
	    alert("Please introduce a valid number between 1 and 9999 in the Runner ID field");
	    $(this).blur();
	    //document.getElementById("rid").focus();
		return false;
	}
}

function validateeid()
{
	if(document.getElementById("eid").value >= 1 && document.getElementById("eid").value <= 9999 && !/^([0-99])*$/.test(document.getElementById("eid").value))
	{
	        return true;
	}
	else
	{
	    alert("Please introduce a valid number between 1 and 9999 in the Event ID field");
		document.getElementById("eid").focus();
		return false;
	}
}


function validated()
{
	
	if (/^\d{4}\-\d{2}\-\d{2}$/.test(document.getElementById("d").value))
	{
		return true;
	}
	else
	{
		alert("Please introduce a valid date with YYYY-MM-DD format in the Date field");
		document.getElementById("d").focus();
		return false;
	}
}


function validateft()
{
	
	if (/^\d{2}\:\d{2}\:\d{2}$/.test(document.getElementById("ft").value))
	{
		return true;
	}
	else
	{
		alert("Please introduce a valid time with HH:MM:SS format in the Finish Time field.");
		document.getElementById("ft").focus();
		return false;
	}
}

function validatep()
{
	if (document.getElementById("p").value === null || document.getElementById("p").value.length === 0 || /^\s+$/.test(document.getElementById("p").value) )
	{
		return true;
	}
	else
	{
		if(document.getElementById("p").value >= 1 && document.getElementById("p").value <= 10000)
		{
		 	if (!/^([0-99])*$/.test(document.getElementById("p").value))
			return true;
		}
		else
		{
			alert("Please introduce a valid number between 1 and 10000 in the Position field");
			document.getElementById("p").focus();
			return false;
		}
	}
}

function validatecid()
{
	if (document.getElementById("cid").value === null || document.getElementById("cid").value.length === 0 || /^\s+$/.test(document.getElementById("cid").value) )
	{
		return true;
	}
	else
	{
		if(document.getElementById("cid").value >= 1 && document.getElementById("cid").value <= 100)
		{
		 	if (!/^([0-99])*$/.test(document.getElementById("cid").value))
			return true;
		}
		else
		{
			alert("Please introduce a valid number between 0 and 100 in the Category ID field");
			return false;
		}
	}
}


function validateag()
{
if (document.getElementById("ag").value === null || document.getElementById("ag").value.length === 0 || /^\s+$/.test(document.getElementById("ag").value) )
	{
		return true;
	}
	else
	{
		if(document.getElementById("ag").value >= 0 && document.getElementById("ag").value <= 100)
		{
			if (/^\d{2}\.\d{2}$/.test(document.getElementById("ft").value))
			alert("ok");
			return true;
		}
		else
		{
			alert("Please introduce a valid number between 0 and 100 in the Age Grade field");
			return false;
		}
	}
}

function validatepb()
{
if (document.getElementById("pb").value === null || document.getElementById("pb").value.length === 0 || /^\s+$/.test(document.getElementById("pb").value) )
	{
		return true;
	}
	else
	{
		if(document.getElementById("pb").value === 0 || document.getElementById("eid").value == 1)
		{
			return true;
		}
		else
		{
			alert("Please introduce a 1 for true or a 0 for false in the Personal Best PB field");
			return false;
		}
	}
}


function fullValidation()
{
    if (validaterid())
    {
        if (validateeid())
        {
            if (validated())
            {
                if (validateft())
                {
                    if (validatep())
                    {
                        if (validatecid())
                        {
                            if (validateag())
                            {
                                if (validatepb())
                                {
                                    return true;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    else
	{
		validaterid();
		validateeid();
		validated();
		validateft();
		validatep();
		validatecid();
		validateag();
		validatepb();
		return false;
	}
	
}
