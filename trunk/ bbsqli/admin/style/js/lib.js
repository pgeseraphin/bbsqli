//pour supprimer un utilisateur
function supp(idU){
    if (confirm('Voulez-vous vraiment supprimer cette ligne ?')) {
        window.location.href = 'admin_supp.php?idU=' + idU;
    }
}
//fin supp(idU)

//pour activer ou desactiver une publication ou un commentaire
function active_moder(id, categ){
    switch (categ) {
        case 1:
            if (confirm('Voulez-vous vraiment activer cette publication ?')) {
                window.location.href = 'moder_active.php?t=1&c=1&id=' + id;
            }
            break;
        case 2:
            if (confirm('Voulez-vous vraiment desactiver cette publication ?')) {
                window.location.href = 'moder_active.php?t=1&c=0&id=' + id;
            }
            break;
        case 3:
            if (confirm('Voulez-vous vraiment activer ce commentaire ?')) {
                window.location.href = 'moder_active.php?t=2&c=1&id=' + id;
            }
            break;
        case 4:
            if (confirm('Voulez-vous vraiment desactiver ce commentaire ?')) {
                window.location.href = 'moder_active.php?t=2&c=0&id=' + id;
            }
            break;
    }
}
//fin active_moder(id, categ)
