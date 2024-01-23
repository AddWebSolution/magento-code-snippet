# magento-code-snippet for Order creation

## Steps to use this class

Place Order.php in your modules Helper directory. You may need to change the namespace accordingly in the class provided.
   
In this case, we assume the namespace is as follows:

```
Addweb\CustomOrder\Helper
```

Now you need to create an object of the helper class where you want to use this method, You can use constructor dependency injection for creating an object for the helper class. A sample class should look like this:

```
namespace Addweb\CustomOrder\Model;

use Addweb\Connect\Helper\Order;

class Order {

  protected $orderHelper;

  public function __construct(Order $orderHelper)
  {
    $this->orderHelper = $orderHelper;
  }

  public function createOrder() {

    // Sample Order Data, you need to apply your logic here to get all real information
    $orderData=[
         'currency_id'  => 'USD',
         'email'        => 'hello@addwebsolution.in', //buyer email id
         'shipping_address' => [
                'firstname'    => 'Mary', 
                'lastname'     => 'Hall',
                'street' => '2574 Spinnaker Lane',
                'city' => 'Sterling',
                'country_id' => 'US',
                'region' => 'IL',
                'postcode' => '61081',
                'telephone' => '815-718-0029',
                'fax' => '12367',
                'save_in_address_book' => 1
        ],
        //array of product which order you want to create
       'items'=> [ 
                ['product_id'=>'1','qty'=>1],
                ['product_id'=>'2','qty'=>2]
        ]
    ];

    // Use helper class to create an order
    $this->orderHelper->createOrder($orderData);


  }


}



```

