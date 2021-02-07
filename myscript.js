function validate()
{
    var nam = document.f1.bname.value;
    if(nam==""){
        alert("Please enter Book name");
        document.f1.bname.focus();
        return false;
    }

    var auth = document.f1.auth.value;
    if(auth==""){
        alert("Please enter Author Name");
        document.f1.auth.focus();
        return false;
    }

    var publ = document.f1.publ.value;
    if(publ==""){
        alert("Please enter Publisher name");
        document.f1.publ.focus();
        return false;
    }

    var isbn = document.f1.isbn.value;
    if(isbn==""){
        alert("Please enter ISBN Number");
        document.f1.isbn.focus();
        return false;
    }

    var ed = document.f1.edi.value;
    if(ed==""){
        alert("Please enter book edition");
        document.f1.edi.focus();
        return false;
    }

    var cost = document.f1.cost.value;
    if(cost==""){
        alert("Please enter cost of the book");
        document.f1.cost.focus();
        return false;
    }
    var qty = document.f1.qty.value;

    if(qty==""){
        alert("Please enter number of books you want!!!");
        document.f1.qty.focus();
        return false;
    }
}