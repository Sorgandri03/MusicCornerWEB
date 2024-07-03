<?php
require_once 'StartSmarty.php';

/**
 * This view is responsible for displaying a custom error page when a requested page is not found (404 error).
 * It provides a user-friendly interface with relevant information about the error and suggestions for the user.
 * 
*/
class V404
{
    private $smarty;
    public function __construct(){
        $this->smarty = StartSmarty::configuration();
    }

    /**
     * Show the 404 page
     * @throws SmartyException
     */
    public function show404()
    {
        /**
         * Check if the user is a customer, a seller or an admin
         */
        if(USession::getInstance()->isSetSessionElement('customer')){
            /**
             * Get the customer
             */
            $customer = USession::getInstance()->getSessionElement('customer');
            $this->smarty->assign('username', $customer->getUsername());
            $this->smarty->assign('customer', true);
            /**
             * Check if the cart is already set
             */
            if(USession::getInstance()->isSetSessionElement($customer->getUsername())){
                $cart = USession::getInstance()->getSessionElement($customer->getUsername());
            }
            /**
             * Set the cart if it is not set
             */
            else{
                $cart = new ECart($customer->getId());
                USession::getInstance()->setSessionElement($customer->getUsername(),$cart);
            }
        }
        /**
         * Check if the user is a seller, get the shop name and set a placeholder cart
         */
        elseif(USession::getInstance()->isSetSessionElement('seller')){
            $this->smarty->assign('username',USession::getInstance()->getSessionElement('seller')->getShopName());
            $cart = new ECart('guest');
        }
        /**
         * Check if the user is a admin, get the mail and set a placeholder cart
         */
        elseif(USession::getInstance()->isSetSessionElement('admin')){
            $this->smarty->assign('username', explode("@", USession::getInstance()->getSessionElement('admin')->getId())[0]);
            $cart = new ECart('guest');
        }
        /**
         * If the user is not logged, set the username to 'Accedi/Registrati' and set a guest cart
         */
        else{
            $this->smarty->assign('username','Accedi/Registrati');
            $this->smarty->assign('customer', true);
            if(USession::getInstance()->isSetSessionElement('cartguest')){
                $cart = USession::getInstance()->getSessionElement('cartguest');
            }
            else{
                $cart = new ECart('guest');
                USession::getInstance()->setSessionElement('cartguest',$cart);
            }
        }
        COrders::checkCart();
        $this->smarty->assign('cart',$cart);
        $this->smarty->display('Smarty\templates\404.tpl');
    }
}