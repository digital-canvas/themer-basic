<style>
    .site-header .container {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding-left:0;
            padding-right:0;
        }
        .site-header .site-title {
            text-align: center;
        }
    .site-menu > ul {
        display: flex;
        list-style-type: none;
        justify-content: space-between;
        flex-direction: column;
        margin:0;
        padding:0;
        border-top: solid 1px #ddd;
    }
    .site-menu .menu-item {
        margin:0;
        padding:0;
    }
    .site-menu .menu-item a {
        display: block;
        padding: .75em 1em;
        background-color: #eee;
        border-bottom: solid 1px #ddd;
    }
    @media(min-width: 768px){
        .site-header .container {
            flex-direction: row;
            padding-left: 20px;
            padding-right: 20px;
        }
        .site-header .site-title {
            text-align: left;
        }
        .site-menu > ul {
            flex-direction: row;
            border: none;
        }
        .site-menu .menu-item a {
            background-color: transparent;
            border: none;
        }
    }
</style>
<header class="site-header">
    <div class="container">
        <h1 class="site-title"><?php echo bloginfo('name');?></h1>
        <?php wp_nav_menu(
            [
                'theme_location'  => 'main-menu',
                'container'       => 'nav',
                'container_class' => 'site-menu',
                'depth' => 1
            ]
        ) ?>
    </div>
</header>
