<?php
/**
 * Public blog service entrypoint.
 */
class Blog extends JX_Serivce implements JX_service
{
    public function main()
    {
        include "containers/blog/index.php";
    }
}
