<?php

namespace App\AgnBundle\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class MenuBuilder extends ContainerAware
{  
    
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $idm = 'menu';
        $menu->addChild('Home', array('route' => '_agn_homepage'))->setAttribute('icon', 'icon-home');
        $menu->setChildrenAttributes(array('id' => $idm,'class'=>'collapse'));

        // access services from the container!
        $em = $this->container->get('doctrine')->getManager();
        // findMostRecent and Blog are just imaginary examples
        $resp = $em->getRepository('AppAgnBundle:AgnAssignments')->findAll();
        
        foreach($resp as $rmenu){
            $label = $rmenu->getAssignDescription();
            $id = $rmenu->getMenusetId();
            $idname = strtolower($rmenu->getAssignShortName());
            $menu->addChild($label, array('uri' => '#' ))
                    ->setAttribute('class','panel')
                    ->setAttribute('dropdown', TRUE)
                    ->setAttribute('icon', 'icon-chevron-sign-right');
            
            $cmenu = $em->getRepository('AppAgnBundle:AgnMenuLines')->findBy( array(
                    'menusetId' => $id,
                    'childMenuId' => null
                    ));
            
            if($cmenu){
                $menu[$label]->setLinkAttributes(array(
                    'class'=>'collapsed',
                    'data-target'=>'#'.$idname.'-nav',
                    'data-parent'=>'#'.$idm
                ));
            }
            
            foreach($cmenu as $childmenu){
                $clabel = $childmenu->getPrompt();
                $cid = $childmenu->getMenuId();
                $croute = $childmenu->getRouteName();
                $menu[$label]->addChild($clabel,array('uri'=>'#'))
                        ->setAttribute('icon', 'icon-double-angle-right');
                $menu[$label]->setChildrenAttributes( array(
                    'id' => $idname.'-nav',
                    'class'=>'collapse',
                    'style'=>'height: 11px;'
                    ));
                
                $cmenu2 = $em->getRepository('AppAgnBundle:AgnMenuLines')->findBy( array(
                    'menusetId' => $id,
                    'childMenuId' => $cid
                    ));
                
                if($cmenu2){
                    $menu[$label][$clabel]
                        ->setAttribute('dropdown', TRUE)
                        ->setAttribute('childdropdown', TRUE)
                        ->setAttribute('icon', 'icon-double-angle-right')
                        ->setLinkAttributes(array(
                            'data-target'=>'#menu'.$cid.'-nav',
                            'data-parent'=>'#menu'.$idm
                        ));
                }
                
                foreach($cmenu2 as $childmenu){
                    $clabel2 = $childmenu->getPrompt();
                    $menu[$label][$clabel]->addChild($clabel2,array('uri'=>'#'))
                            ->setAttribute('icon', 'icon-angle-right ');
                    $menu[$label][$clabel]->setChildrenAttributes( array(
                        'id' => 'menu'.$cid.'-nav',
                        'class'=>'collapse',
                        'style'=>'height: 11px;'
                        ));
                }
            }
            
        }
        //$menu->addChild($resp->getAssignDescription(), array('route' => '_agn_homepage'));

        // you can also add sub level's to your menu's as follows
        //$menu['About Me']->addChild('Logout', array('route' => '_auth_logout'));

        // ... add more children

        return $menu;
    }
    
    public function tesMenu(FactoryInterface $factory, array $options)
    {
        //global $menu;
        $menu = $factory->createItem('root');
        $idm = 'menu';
        $menu->addChild('Home', array('route' => '_agn_homepage'))->setAttribute('icon', 'icon-home');
        $menu->setChildrenAttributes(array('id' => $idm,'class'=>'collapse'));

        // access services from the container!
        $em = $this->container->get('doctrine')->getManager();
        // findMostRecent and Blog are just imaginary examples
        $resp = $em->getRepository('AppAgnBundle:AgnAssignments')->findAll();
        
        foreach($resp as $rmenu){
            $label = $rmenu->getAssignDescription();
            $id = $rmenu->getMenusetId();
            $idname = strtolower($rmenu->getAssignShortName());
            $menu->addChild($idname, array('uri' => '#','label'=>$label ))
                    ->setAttribute('class','panel')
                    ->setAttribute('icon', 'icon-chevron-sign-right ');
            
            $menu = $this->getChildMenu($menu,$id, NULL, $idname);
            
        }

        return $menu;
    }
    
    
    
    public function getChildMenu(ItemInterface $cmenu,$menuset_id,$child_menu_id,$name)
    {
        //global $menu;
        $rm = $this->getDataMenu($menuset_id, $child_menu_id);
        //$arr = $this->getArrayMenu($menuset_id);
        //$branch = $this->getTreeMenu($arr);
        if($rm){
            foreach($rm as $rmenu){
                $id = $rmenu->getMenuId();
                $label = $rmenu->getPrompt();
                $cmenu[$name]->addChild('agnmenu'.$id,
                        array(
                                'uri'=>'#',
                                'label'=>$label
                            ));
                
                //$cmenu = $this->getChildMenu( $cmenu, $menuset_id, $id, 'agnmenu'.$id );
            }
        }
        return $cmenu;
        
    }
    
    public function getDataMenu($menuset,$childmenu)
    {
        $em = $this->container->get('doctrine')->getManager();
        $rm = $em->getRepository('AppAgnBundle:AgnMenuLines')->findBy(
                    array(
                        'menusetId' => $menuset,
                        'childMenuId' => $childmenu
                    )
                );
        return $rm;
    }
    
    public function getArrayMenu($menuset)
    {
        $em = $this->container->get('doctrine')->getManager();
        $rm = $em->getRepository('AppAgnBundle:AgnMenuLines')->findBy(array('menusetId'=>$menuset));
        
        foreach ($rm as $menu){
            $data[] = array(
                'menuid'=>'menu'.$menu->getMenuId(),
                'menuset'=>'menuset'.$menu->getMenusetId(),
                'parentmenu'=>'menu'.$menu->getChildMenuId(),
                'prompt'=>$menu->getPrompt(),
            );
        }
        
        return $data;
    }
    
    public function getTreeMenu($elements=array(),$parentId='menu')
    {
        $branch=array();
        foreach ($elements as $element) {
            if ($element['parentmenu'] == $parentId) {
                $children = $this->getTreeMenu($elements, $element['menuid']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[$element['menuid']] = $element;
            }
        }
        return $branch;
    }
    
    public function leftMenu(FactoryInterface $factory, array $options)
    {
        //global $menu;
        $menu = $factory->createItem('root');
        $idm = 'menu';
        $menu->addChild('Home', array('route' => '_agn_homepage'))->setAttribute('icon', 'icon-home');
        $menu->setChildrenAttributes(array('id' => $idm,'class'=>'collapse'));

        // access services from the container!
        $em = $this->container->get('doctrine')->getManager();
        // findMostRecent and Blog are just imaginary examples
        $resp = $em->getRepository('AppAgnBundle:AgnAssignments')->findAll();
        
        foreach($resp as $rmenu){
            $label = $rmenu->getAssignDescription();
            $id = $rmenu->getMenusetId();
            $idname = strtolower($rmenu->getAssignShortName());
            $menu->addChild($idname, array('uri' => '#','label'=>$label ))
                    ->setAttribute('class','panel')
                    ->setAttribute('icon', 'icon-chevron-sign-right ');
            
            $menu = $this->getCMenu($menu,$id, NULL, $idname);
            
        }

        return $menu;
    }
    
    public function getCMenu(ItemInterface $cmenu,$menuset_id,$child_menu_id,$name)
    {
        $arr = $this->getArrayMenu($menuset_id);
        $branch = $this->getTreeMenu($arr);
        foreach($branch as $ind=>$val){
            
        }
        if($rm){
            foreach($rm as $rmenu){
                $id = $rmenu->getMenuId();
                $label = $rmenu->getPrompt();
                $cmenu[$name]->addChild('agnmenu'.$id,
                        array(
                                'uri'=>'#',
                                'label'=>$label
                            ));
                
                //$cmenu = $this->getChildMenu( $cmenu, $menuset_id, $id, 'agnmenu'.$id );
            }
        }
        return $cmenu;
        
    }
    
    
}