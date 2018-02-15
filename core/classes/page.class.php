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
    public function GetPageDetail($PageID, $Detail) {
        $query = <<<SQL
        SELECT * FROM {$this->tPrefix}pages
        WHERE id = :PageID
SQL;
        $resource= $this->connection->db->prepare( $query );
        $resource->execute( array (
            ":PageID"   => $PageID
        ));
        if($resource->rowCount() == 0 ) {
            return "Load 404 Template";
        }
        else {
            $result = $resource->fetch(PDO::FETCH_ASSOC);
            return $result[$Detail];
        }
        return $resource->rowCount();

    }

}

function GetPageDetail($PageID, $Detail) {
    $Page = new page();
    return $Page->GetPageDetail($PageID, $Detail);
}