if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }

// result.php

    function isSelect() 
    {
        var selectMenu = $("#selectCategorie");
        var selectVal = $("#selectCategorie :selected").val();
        var selectText = $("#selectCategorie :selected").text();
        if (selectVal == "1" || selectVal == "2" || selectVal == "3" || selectVal == "4" || selectVal == "0")
        {
            $('#btnSelectCategorie').removeAttr('disabled');
        }
    }

//   profilPageStyle.php

  function profilPageStyle()
  {
    var bodyH = document.body.clientHeight;
    var navbarH = document.getElementById('navbar').clientHeight;
    var sidebar = document.getElementById('sidebar');
    var main = document.getElementById('main');
    
    document.body.style.paddingTop = navbarH + "px"; 
    sidebar.style.paddingTop = navbarH + "px"; 
    
    mainH = bodyH - navbarH;
    main.style.minHeight = mainH + "px";
  }


  function changePasswordForm()
  {
    //afficher le message (succes ou erreur) une seule fois après l'envoi du formulaire
    $('#list-tab a[href="#list-change-password"]').tab('show');

    $('#list-tab a[href="#list-change-password"]').on('hidden.bs.tab	', function (e) {
      document.getElementById('alert-form').classList.add("d-none");
    });
  }