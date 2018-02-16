<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */

namespace page;
use PDO;

class page
{
    public function __construct() {
        $this->connection = new \website_connection();
        $this->tPrefix = Config('Database', "Table_Prefix");

    }
    public function CreateMenu($PreHTML, $PreActive, $PostHTML, $AClass, $MenuLocation) {
        $query = <<<SQL
        SELECT * FROM {$this->tPrefix}pages
        WHERE menuLocation = :MenuLocation
        AND active = :Yes
        ORDER BY pageOrder ASC
SQL;
        $resource = $this->connection->db->prepare( $query );
        $resource->execute( array (
            ":MenuLocation" => $MenuLocation,
            ":Yes"  => 1
        ));
        $CurrentPage = str_replace("_", " ", PageIdent());
        $Menu = '';
        foreach($resource as $row) {
            if (Config("SiteDetails", "FriendlyURL") == true) {
                $Link = str_replace(" " , "_", '//' . $_SERVER['HTTP_HOST'] . '/' . $row['title']);
            } else {
                $Link = str_replace(" ", "_", '//' . $_SERVER['HTTP_HOST'] . '/index.php?page=' . $row['title']);
            }
            if ($CurrentPage == $row['title']) {
                $Return = $PreActive . '<a class="' . $AClass . ' faa-parent animated-hover" href="' . $Link . '"><i class="'.$row['fa_icon'].'"></i> ' . $row['title'] . '</a>' . $PostHTML;
            } else {
                $Return =  $PreHTML . '<a class="' . $AClass . ' faa-parent animated-hover" href="' . $Link . '"><i class="'.$row['fa_icon'].'"></i> ' . $row['title'] . '</a>' . $PostHTML;
            }
            $Menu .= $Return;
        }
        return $Menu;
    }
    public function GetPageDetail($PageTitle, $Detail) {
        $PageID = $this->ConvertFriendlyID(str_replace("_", " ", $PageTitle));
        $query = <<<SQL
        SELECT * FROM {$this->tPrefix}pages
        WHERE id = :PageID
SQL;
        $resource= $this->connection->db->prepare( $query );
        $resource->execute( array (
            ":PageID"   => $PageID
        ));
        if($resource->rowCount() == 0 ) {
            LoadFontAwesome();
            $string = "<p class='text-center'><i class='fas fa-exclamation-triangle faa-flash animated fa-10x faa-slow'></i></p><p class='text-center'><h2>Page '".PageIdent()."' Not Found</h2></p>";
            $string .= "<p>Try these links for more!</p>";
            return $string;
        }
        else {
            $result = $resource->fetch(PDO::FETCH_ASSOC);
            return $result[$Detail];
        }

    }
    public function ConvertFriendlyID($ID) {
        $query = <<<SQL
        SELECT id FROM {$this->tPrefix}pages
        WHERE title = :ID
SQL;
        $resource = $this->connection->db->prepare( $query );
        $resource->execute( array (
            ":ID"   => $ID,
        ));
        $result = $resource->fetch(PDO::FETCH_ASSOC);
        return $result['id'];

    }

}

function GetPageDetail($PageID, $Detail) {
    $Page = new page();
    return $Page->GetPageDetail($PageID, $Detail);
}
function CreateMenu($PreHTML, $PreActive, $PostHTML, $AClass, $MenuLocation) {
    $Page = new page();
    echo $Page->CreateMenu($PreHTML, $PreActive, $PostHTML, $AClass, $MenuLocation);
}
function HomeMenu($PreHTML, $PreActive, $PostHTML, $AClass, $FAAnimation) {
    $CurrentPage = PageIdent();
    $Link = str_replace(" ", "-", '//' . $_SERVER['HTTP_HOST']);
        if ($CurrentPage == 'Home') {
            $Menu = $PreActive . '<a class="' . $AClass . ' faa-parent animated-hover" href="' . $Link . '"><i class="fas fa-home faa-'.$FAAnimation.'"></i> Home</a>' . $PostHTML;
        } else {
            $Menu =  $PreHTML . '<a class="' . $AClass . ' faa-parent animated-hover" href="' . $Link . '"><i class="fas fa-home faa-'.$FAAnimation.'"></i> Home</a>' . $PostHTML;
        }
        echo $Menu;
}

