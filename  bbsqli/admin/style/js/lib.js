function supp(idU)
 {
     if (confirm('Voulez-vous vraiment supprimer cette ligne ?')) {
         window.location.href = 'admin_supp.php?idU=' + idU;
     }
 }