<?php

require_once 'contact.php';
class utilisateur extends contact{

  public $id,$nom,$prenom,$password, $passwordmodifconf,$passwordmodif,$passwordconf,$role,$username,$typemodif,$mail,$mailmodif,$idmodif,$idadminmodif,$nomadminmodif,$prenomadminmodif,$livnom,$passwordadminmodif,$mailadminmodif,$roleadminmodif,$livaut,$cdaut,$cdnomrecherche,$filmaut,$refcd,$refliv,$reffilm,$filmnom,$cdnom,$livrenom,$cdth,$filmth,$livreth;

// constructeur

  public function __construct(array $donnees)
  {

     $this->hydrate($donnees);

  }


//Fonction Hydrate

  public function hydrate(array $donnes)
  {
    foreach ($donnes as $key => $value){
      $method = 'set'.ucfirst($key);

    if (method_exists($this, $method)){
      // On appelle le setter.
      $this->$method($value);
    }
  }
}




// LISTE DES GETTERS

public function getId()
{
  return $this-> id;
}
public function getIdmodif()
{
  return $this-> idmodif;
}


public function getIdadminmodif()
{
  return $this-> idadminmodif;
}

public function getNom()
{
  return $this-> nom;
}

public function getNomadminmodif()
{
  return $this-> nomadminmodif;
}

public function getPrenom()
{
  return $this-> prenom;
}

public function getPrenomadminmodif()
{
  return $this-> prenomadminmodif;
}

public function getPassword()
{
  return $this-> password;
}


public function getPasswordadminmodif()
{
  return $this-> passwordadminmodif;
}

  public function getPasswordconf()
  {
    return $this-> passwordconf;
  }

  public function getPasswordmodifconf()
  {
    return $this-> passwordmodifconf;
  }

  public function getPasswordmodif()
  {
    return $this-> passwordmodif;
  }

  public function getUsername()
  {
    return $this-> username;
  }


  public function getUsernameadminmodif()
  {
    return $this-> usernameadminmodif;
  }


  public function getMail()
  {
    return $this-> mail;
  }

  public function getMailadminmodif()
  {
    return $this-> mailadminmodif;
  }

  public function getMailmodif()
  {
    return $this-> mailmodif;
  }

  public function getRole()
  {
    return $this-> role;
  }

  public function getRoleadminmodif()
  {
    return $this-> roleadminmodif;
  }

  public function getTypemodif()
  {
    return $this-> typemodif;
  }

  public function getRefcd()
  {
    return $this-> refcd;
  }

  public function getReffilm()
  {
    return $this-> reffilm;
  }

  public function getReflivre()
  {
    return $this-> reflivre;
  }

  public function getLivnom()
  {
    return $this-> livnom;
  }

  public function getCdnom()
  {
    return $this-> cdnom;
  }

  public function getFilmnom()
  {
    return $this-> filmnom;
  }

  public function getFilmaut()
  {
    return $this-> filmaut;
  }

  public function getCdaut()
  {
    return $this-> cdaut;
  }

  public function getCdnomrecherche()
  {
    return $this-> cdnomrecherche;
  }

  public function getLivaut()
  {
    return $this-> livaut;
  }

  public function getLivth()
  {
    return $this-> livth;
  }

  public function getCdth()
  {
    return $this-> cdth;
  }

  public function getFilmth()
  {
    return $this-> filmth;
  }



// LISTE DES SETTERS

public function setId($id)
{
  // On convertit l'argument en nombre entier.
  // Si c'en était déjà un, rien ne changera.
  // Sinon, la conversion donnera le nombre 0 (à quelques exceptions près, mais rien d'important ici).
  $id = (int) $id;

  // On vérifie ensuite si ce nombre est bien strictement positif.
  if ($id > 0)
  {
    // Si c'est le cas, c'est tout bon, on assigne la valeur à l'attribut correspondant.
    $this-> id = $id;
  }
}

public function setIdadminmodif($idadminmodif)
{
  // On convertit l'argument en nombre entier.
  // Si c'en était déjà un, rien ne changera.
  // Sinon, la conversion donnera le nombre 0 (à quelques exceptions près, mais rien d'important ici).
  $idadminmodif = (int) $idadminmodif;

  // On vérifie ensuite si ce nombre est bien strictement positif.
  if ($idadminmodif > 0)
  {
    // Si c'est le cas, c'est tout bon, on assigne la valeur à l'attribut correspondant.
    $this-> idadminmodif = $idadminmodif;
  }
}

public function setIdmodif($idmodif)
{
  // On convertit l'argument en nombre entier.
  // Si c'en était déjà un, rien ne changera.
  // Sinon, la conversion donnera le nombre 0 (à quelques exceptions près, mais rien d'important ici).
  $idmodif = (int) $idmodif;

  // On vérifie ensuite si ce nombre est bien strictement positif.
  if ($idmodif > 0)
  {
    // Si c'est le cas, c'est tout bon, on assigne la valeur à l'attribut correspondant.
    $this-> idmodif = $idmodif;
  }
}

public function setNom($nom)
{
  // On vérifie qu'il s'agit bien d'une chaîne de caractères.
  if (is_string($nom))
  {
    $this-> nom = $nom;
  }
}

public function setPrenom($prenom)
{
  // On vérifie qu'il s'agit bien d'une chaîne de caractères.
  if (is_string($prenom))
  {
    $this-> prenom = $prenom;
  }}


  public function setPassword($password)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    if (is_string($password))
    {
      $this-> password = $password;
    }
}

public function setPasswordmodif($passwordmodif)
{
  // On vérifie qu'il s'agit bien d'une chaîne de caractères.
  if (is_string($passwordmodif))
  {
    $this-> passwordmodif = $passwordmodif;
  }
}

public function setPasswordmodifconf($passwordmodifconf)
{
  // On vérifie qu'il s'agit bien d'une chaîne de caractères.
  if (is_string($passwordmodifconf))
  {
    $this-> passwordmodifconf = $passwordmodifconf;
  }
}




public function setNomadminmodif($nomadminmodif)
{
  // On vérifie qu'il s'agit bien d'une chaîne de caractères.
  if (is_string($nomadminmodif))
  {
    $this-> nomadminmodif = $nomadminmodif;
  }
}

public function setPrenomadminmodif($prenomadminmodif)
{
  // On vérifie qu'il s'agit bien d'une chaîne de caractères.
  if (is_string($prenomadminmodif))
  {
    $this-> prenomadminmodif = $prenomadminmodif;
  }}


  public function setPasswordadminmodif($passwordadminmodif)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    if (is_string($passwordadminmodif))
    {
      $this-> passwordadminmodif = $passwordadminmodif;
    }
}

public function setUsernameadminmodif($usernameadminmodif)
{
  // On vérifie qu'il s'agit bien d'une chaîne de caractères.
  if (is_string($usernameadminmodif))
  {
    $this-> usernameadminmodif = $usernameadminmodif;
  }}

  public function setRoleadminmodif($roleadminmodif)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    if (is_string($roleadminmodif))
    {
      $this-> roleadminmodif = $roleadminmodif;
    }}

    public function setMailadminmodif($mailadminmodif)
    {
      // On vérifie qu'il s'agit bien d'une chaîne de caractères.
      if (is_string($mailadminmodif))
      {
        $this-> mailadminmodif = $mailadminmodif;
      }}


public function setPasswordconf($passwordconf)
{
  // On vérifie qu'il s'agit bien d'une chaîne de caractères.
  if (is_string($passwordconf))
  {
    $this-> passwordconf = $passwordconf;
  }
}
    public function setUsername($username)
    {
      // On vérifie qu'il s'agit bien d'une chaîne de caractères.
      if (is_string($username))
      {
        $this-> username = $username;
      }}

      public function setRole($role)
      {
        // On vérifie qu'il s'agit bien d'une chaîne de caractères.
        if (is_string($role))
        {
          $this-> role = $role;
        }}
        public function setTypemodif($typemodif)
        {
          // On vérifie qu'il s'agit bien d'une chaîne de caractères.
          if (is_string($typemodif))
          {
            $this-> typemodif = $typemodif;
          }}

          public function setMail($mail)
          {
            // On vérifie qu'il s'agit bien d'une chaîne de caractères.
            if (is_string($mail))
            {
              $this-> mail = $mail;
            }}

            public function setMailmodif($mailmodif)
            {
              // On vérifie qu'il s'agit bien d'une chaîne de caractères.
              if (is_string($mailmodif))
              {
                $this-> mailmodif = $mailmodif;
              }}

              public function setLivaut($livaut)
              {
                // On vérifie qu'il s'agit bien d'une chaîne de caractères.
                if (is_string($livaut))
                {
                  $this-> livaut = $livaut;
                }}

                public function setFilmaut($filmaut)
                {
                  // On vérifie qu'il s'agit bien d'une chaîne de caractères.
                  if (is_string($filmaut))
                  {
                    $this-> filmaut = $filmaut;
                  }}

                  public function setCdaut($cdaut)
                  {
                    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
                    if (is_string($cdaut))
                    {
                      $this-> cdaut = $cdaut;
                    }}

                    public function setCdth($cdth)
                    {
                      // On vérifie qu'il s'agit bien d'une chaîne de caractères.
                      if (is_string($cdth))
                      {
                        $this-> cdth = $cdth;
                      }}

                      public function setFilmth($filmth)
                      {
                        // On vérifie qu'il s'agit bien d'une chaîne de caractères.
                        if (is_string($filmth))
                        {
                          $this-> filmth = $filmth;
                        }}

                        public function setLivth($livth)
                        {
                          // On vérifie qu'il s'agit bien d'une chaîne de caractères.
                          if (is_string($livth))
                          {
                            $this-> livth = $livth;
                          }}

                          public function setLivnom($livnom)
                          {
                            // On vérifie qu'il s'agit bien d'une chaîne de caractères.
                            if (is_string($livnom))
                            {
                              $this-> livnom = $livnom;
                            }}

                            public function setCdnom($cdnom)
                            {
                              // On vérifie qu'il s'agit bien d'une chaîne de caractères.
                              if (is_string($cdnom))
                              {
                                $this-> cdnom = $cdnom;
                              }}

                              public function setCdnomrecherche($cdnomrecherche)
                              {
                                // On vérifie qu'il s'agit bien d'une chaîne de caractères.
                                if (is_string($cdnomrecherche))
                                {
                                  $this-> cdnomrecherche = $cdnomrecherche;
                                }}

                              public function setFilmnom($filmnom)
                              {
                                // On vérifie qu'il s'agit bien d'une chaîne de caractères.
                                if (is_string($filmnom))
                                {
                                  $this-> filmnom = $filmnom;
                                }}






}

?>
