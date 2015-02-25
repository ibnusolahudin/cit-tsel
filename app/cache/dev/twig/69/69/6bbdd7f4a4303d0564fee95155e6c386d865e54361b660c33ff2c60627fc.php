<?php

/* @X4DSBAdmin2/layout.html.twig */
class __TwigTemplate_69696bbdd7f4a4303d0564fee95155e6c386d865e54361b660c33ff2c60627fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("@X4DSBAdmin2/base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'navigation_block' => array($this, 'block_navigation_block'),
            'navigation' => array($this, 'block_navigation'),
            'page_wrapper' => array($this, 'block_page_wrapper'),
            'content' => array($this, 'block_content'),
            'header' => array($this, 'block_header'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@X4DSBAdmin2/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('navigation_block', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('page_wrapper', $context, $blocks);
    }

    // line 4
    public function block_navigation_block($context, array $blocks = array())
    {
        // line 5
        echo "        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            ";
        // line 6
        $this->displayBlock('navigation', $context, $blocks);
        // line 9
        echo "        </nav>
    ";
    }

    // line 6
    public function block_navigation($context, array $blocks = array())
    {
        // line 7
        echo "                ";
        $this->env->loadTemplate("X4DSBAdmin2Bundle::nav.html.twig")->display($context);
        // line 8
        echo "            ";
    }

    // line 12
    public function block_page_wrapper($context, array $blocks = array())
    {
        // line 13
        echo "        <div id=\"page-wrapper\">
            ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 555
        echo "        </div>
    ";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class=\"page-header\">";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        echo "</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-3\">
                                            <i class=\"fa fa-comments fa-5x\"></i>
                                        </div>
                                        <div class=\"col-xs-9 text-right\">
                                            <div class=\"huge\">26</div>
                                            <div>New Comments!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\">
                                    <div class=\"panel-footer\">
                                        <span class=\"pull-left\">View Details</span>
                                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"panel panel-green\">
                                <div class=\"panel-heading\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-3\">
                                            <i class=\"fa fa-tasks fa-5x\"></i>
                                        </div>
                                        <div class=\"col-xs-9 text-right\">
                                            <div class=\"huge\">12</div>
                                            <div>New Tasks!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\">
                                    <div class=\"panel-footer\">
                                        <span class=\"pull-left\">View Details</span>
                                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"panel panel-yellow\">
                                <div class=\"panel-heading\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-3\">
                                            <i class=\"fa fa-shopping-cart fa-5x\"></i>
                                        </div>
                                        <div class=\"col-xs-9 text-right\">
                                            <div class=\"huge\">124</div>
                                            <div>New Orders!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\">
                                    <div class=\"panel-footer\">
                                        <span class=\"pull-left\">View Details</span>
                                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"panel panel-red\">
                                <div class=\"panel-heading\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-3\">
                                            <i class=\"fa fa-support fa-5x\"></i>
                                        </div>
                                        <div class=\"col-xs-9 text-right\">
                                            <div class=\"huge\">13</div>
                                            <div>Support Tickets!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"#\">
                                    <div class=\"panel-footer\">
                                        <span class=\"pull-left\">View Details</span>
                                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class=\"row\">
                    <div class=\"col-lg-8\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Area Chart Example
                            <div class=\"pull-right\">
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                        Actions
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                        <li><a href=\"#\">Action</a>
                                        </li>
                                        <li><a href=\"#\">Another action</a>
                                        </li>
                                        <li><a href=\"#\">Something else here</a>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"#\">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div id=\"morris-area-chart\"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Bar Chart Example
                            <div class=\"pull-right\">
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                        Actions
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                        <li><a href=\"#\">Action</a>
                                        </li>
                                        <li><a href=\"#\">Another action</a>
                                        </li>
                                        <li><a href=\"#\">Something else here</a>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"#\">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-lg-4\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered table-hover table-striped\">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>\$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>\$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>\$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>\$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>\$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>\$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>\$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>\$943.45</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class=\"col-lg-8\">
                                    <div id=\"morris-bar-chart\"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-clock-o fa-fw\"></i> Responsive Timeline
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <ul class=\"timeline\">
                                <li>
                                    <div class=\"timeline-badge\"><i class=\"fa fa-check\"></i>
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                            <p><small class=\"text-muted\"><i class=\"fa fa-clock-o\"></i> 11 hours ago via Twitter</small>
                                            </p>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"timeline-inverted\">
                                    <div class=\"timeline-badge warning\"><i class=\"fa fa-credit-card\"></i>
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-badge danger\"><i class=\"fa fa-bomb\"></i>
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"timeline-inverted\">
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-badge info\"><i class=\"fa fa-save\"></i>
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                            <hr>
                                            <div class=\"btn-group\">
                                                <button type=\"button\" class=\"btn btn-primary btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                                    <i class=\"fa fa-gear\"></i>  <span class=\"caret\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                    <li><a href=\"#\">Action</a>
                                                    </li>
                                                    <li><a href=\"#\">Another action</a>
                                                    </li>
                                                    <li><a href=\"#\">Something else here</a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"timeline-inverted\">
                                    <div class=\"timeline-badge success\"><i class=\"fa fa-graduation-cap\"></i>
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-8 -->
                    <div class=\"col-lg-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <i class=\"fa fa-bell fa-fw\"></i> Notifications Panel
                            </div>
                            <!-- /.panel-heading -->
                            <div class=\"panel-body\">
                                <div class=\"list-group\">
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                                    <span class=\"pull-right text-muted small\"><em>4 minutes ago</em>
                                                    </span>
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                                    <span class=\"pull-right text-muted small\"><em>12 minutes ago</em>
                                                    </span>
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                                    <span class=\"pull-right text-muted small\"><em>27 minutes ago</em>
                                                    </span>
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                                    <span class=\"pull-right text-muted small\"><em>43 minutes ago</em>
                                                    </span>
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                                    <span class=\"pull-right text-muted small\"><em>11:32 AM</em>
                                                    </span>
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"fa fa-bolt fa-fw\"></i> Server Crashed!
                                                    <span class=\"pull-right text-muted small\"><em>11:13 AM</em>
                                                    </span>
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"fa fa-warning fa-fw\"></i> Server Not Responding
                                                    <span class=\"pull-right text-muted small\"><em>10:57 AM</em>
                                                    </span>
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"fa fa-shopping-cart fa-fw\"></i> New Order Placed
                                                    <span class=\"pull-right text-muted small\"><em>9:49 AM</em>
                                                    </span>
                                    </a>
                                    <a href=\"#\" class=\"list-group-item\">
                                        <i class=\"fa fa-money fa-fw\"></i> Payment Received
                                                    <span class=\"pull-right text-muted small\"><em>Yesterday</em>
                                                    </span>
                                    </a>
                                </div>
                                <!-- /.list-group -->
                                <a href=\"#\" class=\"btn btn-default btn-block\">View All Alerts</a>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <i class=\"fa fa-bar-chart-o fa-fw\"></i> Donut Chart Example
                            </div>
                            <div class=\"panel-body\">
                                <div id=\"morris-donut-chart\"></div>
                                <a href=\"#\" class=\"btn btn-default btn-block\">View Details</a>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <div class=\"chat-panel panel panel-default\">
                            <div class=\"panel-heading\">
                                <i class=\"fa fa-comments fa-fw\"></i>
                                Chat
                                <div class=\"btn-group pull-right\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                        <i class=\"fa fa-chevron-down\"></i>
                                    </button>
                                    <ul class=\"dropdown-menu slidedown\">
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-refresh fa-fw\"></i> Refresh
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-check-circle fa-fw\"></i> Available
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-times fa-fw\"></i> Busy
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-clock-o fa-fw\"></i> Away
                                            </a>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-sign-out fa-fw\"></i> Sign Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class=\"panel-body\">
                                <ul class=\"chat\">
                                    <li class=\"left clearfix\">
                                                    <span class=\"chat-img pull-left\">
                                                        <img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                                    </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <strong class=\"primary-font\">Jack Sparrow</strong>
                                                <small class=\"pull-right text-muted\">
                                                    <i class=\"fa fa-clock-o fa-fw\"></i> 12 mins ago
                                                </small>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>
                                    <li class=\"right clearfix\">
                                                    <span class=\"chat-img pull-right\">
                                                        <img src=\"http://placehold.it/50/FA6F57/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                                    </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <small class=\" text-muted\">
                                                    <i class=\"fa fa-clock-o fa-fw\"></i> 13 mins ago</small>
                                                <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>
                                    <li class=\"left clearfix\">
                                                    <span class=\"chat-img pull-left\">
                                                        <img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                                    </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <strong class=\"primary-font\">Jack Sparrow</strong>
                                                <small class=\"pull-right text-muted\">
                                                    <i class=\"fa fa-clock-o fa-fw\"></i> 14 mins ago</small>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>
                                    <li class=\"right clearfix\">
                                                    <span class=\"chat-img pull-right\">
                                                        <img src=\"http://placehold.it/50/FA6F57/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                                    </span>
                                        <div class=\"chat-body clearfix\">
                                            <div class=\"header\">
                                                <small class=\" text-muted\">
                                                    <i class=\"fa fa-clock-o fa-fw\"></i> 15 mins ago</small>
                                                <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.panel-body -->
                            <div class=\"panel-footer\">
                                <div class=\"input-group\">
                                    <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Type your message here...\" />
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-warning btn-sm\" id=\"btn-chat\">
                                                        Send
                                                    </button>
                                                </span>
                                </div>
                            </div>
                            <!-- /.panel-footer -->
                        </div>
                        <!-- /.panel .chat-panel -->
                    </div>
                    <!-- /.col-lg-4 -->
                    </div>
                    <!-- /.row -->
            ";
    }

    public function block_header($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
    }

    // line 560
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 561
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 562
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2b3ec23_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2b3ec23_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2b3ec23_timeline_1.css");
            // line 566
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "2b3ec23_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2b3ec23_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2b3ec23_morris_2.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "2b3ec23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2b3ec23") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2b3ec23.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 568
        echo "
";
    }

    // line 571
    public function block_javascripts($context, array $blocks = array())
    {
        // line 572
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 573
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e4d84ce_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e4d84ce_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e4d84ce_raphael.min_1.js");
            // line 578
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e4d84ce_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e4d84ce_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e4d84ce_morris.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e4d84ce_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e4d84ce_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e4d84ce_morris-data_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "e4d84ce"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e4d84ce") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e4d84ce.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "@X4DSBAdmin2/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  695 => 578,  691 => 573,  686 => 572,  683 => 571,  678 => 568,  658 => 566,  654 => 562,  649 => 561,  646 => 560,  99 => 17,  95 => 15,  92 => 14,  87 => 555,  85 => 14,  82 => 13,  79 => 12,  75 => 8,  72 => 7,  69 => 6,  64 => 9,  62 => 6,  59 => 5,  56 => 4,  52 => 12,  49 => 11,  46 => 4,  43 => 3,  11 => 1,);
    }
}
