function ToSearch(){
    var search = document.getElementById("search").value;
    
    if(search.toLowerCase() == "add header"){
        location.href="Add-header.php";
        return false;
    }else if(search.toLowerCase() == "view header"){
        location.href="View-header.php";
        return false;
    }if(search.toLowerCase() == "add footer"){
        location.href="Add-footer.php";
        return false;
    }else if(search.toLowerCase() == "view footer"){
        location.href="View-footer.php";
        return false;
    }if(search.toLowerCase() == "add slidebar"){
        location.href="Add-slidebar.php";
        return false;
    }else if(search.toLowerCase() == "view slidebar"){
        location.href="View-slidebar.php";
        return false;
    }if(search.toLowerCase() == "add offer"){
        location.href="Add-Offers.php";
        return false;
    }else if(search.toLowerCase() == "view offer"){
        location.href="View-Offers.php";
        return false;
    }if(search.toLowerCase() == "add about inner"){
        location.href="Add-aboutInner.php";
        return false;
    }else if(search.toLowerCase() == "view about inner"){
        location.href="Add-aboutInner.php";
        return false;
    }if(search.toLowerCase() == "add about home"){
        location.href="Add-AboutHome.php";
        return false;
    }else if(search.toLowerCase() == "view about home"){
        location.href="View-AboutHome.php";
        return false;
    }else if(search.toLowerCase() == "view mneu cart home"){
        location.href="Add-MneuCartHome.php";
        return false;
    }if(search.toLowerCase() == "add mneu cart home"){
        location.href="View-MneuCartHome.php";
        return false;
    }else if(search.toLowerCase() == "view mneu cart inner"){
        location.href="Add-MnewCartInner.php";
        return false;
    }if(search.toLowerCase() == "add mneu cart inner"){
        location.href="View-MnewCartInner.php";
        return false;
    }else if(search.toLowerCase() == "view feedback"){
        location.href="View-Feedback.php";
        return false;
    }if(search.toLowerCase() == "add feedback"){
        location.href="Add-Feedback.php";
        return false;
    }else if(search.toLowerCase() == "view book home"){
        location.href="View-bookTableHome.php";
        return false;
    }if(search.toLowerCase() == "view book inner"){
        location.href="View-BookTableInner.php";
        return false;
    }else if(search.toLowerCase() == "view book profile"){
        location.href="View-BookedTableProfilr.php";
        return false;
    }if(search.toLowerCase() == "view order"){
        location.href="View-orders.php";
        return false;
    }else if(search.toLowerCase() == "view add cart"){
        location.href="View-Addcart.php";
        return false;
    }else if(search.toLowerCase() == "view users"){
        location.href="View-users.php";
        return false;
    }else{
        alert("not found page");
    } 
}