<!--<div id="desktop-content">-->
<div class="container-fluid">
    <div class="jumbotron">
        <h1>Servare</h1>

        <div id="desktop-content">
            <?php
            if ($this->session->userdata('id')) { ?>
                <p>
                    Welcome to Back, <em><?php echo $this->session->userdata('username'); ?></em>
                    <strong>Servare</strong>
                </p>
                <p>We are very secure due to the fact that we do not ask for any of your account numbers or details.
                    <br>
                    all we need is just how much you deposit each month, how much interest, when what date was your firs
                    deposit and for you to name the account (this could be Big Bobs Savings). Once we have these you can
                    now
                    track the growth of the account, the total interest earn and how long you have left to account
                    maturity.
                </p>
                <p>
                    It really is that easy, and the good news is that once you add all your accounts (and given them
                    wacky
                    names) we will give you your total balance of all your accounts !.
                </p>
                <?php
            } else { ?>
                <p>
                    Welcome to <strong>Servare</strong> A useful tool to help you keep track of your savings accounts no
                    matter what bank all under one roof.
                </p>
                <?php
            }
            ?>
            <p>
                You can view this total sum of all your savings combined either on your <?php
                if ($this->session->userdata('id')) { ?>
                    <?php echo anchor('profile', 'Account Overview'); ?>
                    <?php
                } else { ?>
                    <?php echo "<strong>accounts overview</strong>" ?>
                    <?php
                }
                ?> or go to
                <?php
                if ($this->session->userdata('id')) { ?>
                    <?php echo anchor('members', 'Dashboard'); ?>
                    <?php
                } else { ?>
                    <?php echo "<strong>dashboard</strong>" ?>
                    <?php
                }
                ?>
                for a more comprehensive breakdown
            </p>
            <p>
                You can use us on any devise either it be your table on your sofa, your smart phone on your coffee brake
                or on your desktop.
                we give different information depending on what device your viewing on !
            </p>
        </div>
        <p>
            <?php
            if ($this->session->userdata('id')) { ?>
                <strong>Welcome Back, <?php echo $this->session->userdata('username'); ?></strong>
                <?php
            } else { ?>
                <a class="btn btn-lg btn-primary" <?php echo anchor('login/signup', 'Sign up &raquo;'); ?> </a>
                <?php
            }
            ?>
        </p>
    </div>

    <!-- Example row of columns -->
    <div class="row">
        <div class="col-lg-4">
            <h2>My Dashboard</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui. </p>
            <p>
                <?php
                if ($this->session->userdata('id')) { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('members', 'My Dashboard &raquo;'); ?> </a>
                    <?php
                } else { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('login/signup', 'Sign up &raquo;'); ?> </a>
                    <?php
                }
                ?>
            </p>
        </div>
        <div class="col-lg-4">
            <h2>Accounts Overview</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui. </p>
            <p>
                <?php
                if ($this->session->userdata('id')) { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('profile', 'My Account Overview &raquo;'); ?> </a>
                    <?php
                } else { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('login/signup', 'Sign up &raquo;'); ?> </a>

                    <?php
                }
                ?>
            </p>
        </div>
        <div class="col-lg-4">
            <h2>Add New Accounts</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                fermentum massa.</p>
            <p>
                <?php
                if ($this->session->userdata('id')) { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('banks', 'Add Regular Savings &raquo;'); ?> </a>
                    <?php
                } else { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('login/signup', 'Sign up &raquo;'); ?> </a>

                    <?php
                }
                ?>
            </p>
        </div>
    </div>
</div>