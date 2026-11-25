<?php
/**
 * Register the public blog service using JamilX's app convention.
 */
class blog extends JX_Serivce implements JX_service
{
    public function main()
    {
        $posts = blog_posts();
        include __DIR__ . '/containers/index.php';
    }
}
