<?php
/**
 * Blog index action.
 */
class BlogHome extends JX_Action implements JX_ActionI
{
    public function getAction()
    {
        $posts = blog_posts();
        include "containers/blog/index.php";
    }

    public function addAction()
    {
        $this->getAction();
    }
}
