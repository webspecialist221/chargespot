<?php 
$config = [
  'Devices_form_rules' => [
        [
        'field'=>'txtDeviceId',
        'label' => 'Device ID',
        'rules' => 'required'
        ]
  ],
  'Shops_form_rules' => [
  [
  'field' => 'txtType',
  'label' => 'Type',
  'rules' => 'required'
  ],
  [
  'field' => 'txtShopName',
  'label' => 'Shop Name',
  'rules' => 'required'
  ],
  [
  'field' => 'txtLaintitude',
  'label' => 'Laintitude',
  'rules' => 'required'
  ],
  [
  'field' => 'txtLongtitude',
  'label' => 'Longtitude',
  'rules' => 'required'
  ],
  [
  'field' => 'txtAddress',
  'label' => 'Address',
  'rules' => 'required'
  ],
  [
  'field' => 'txtCity',
  'label' => 'City',
  'rules' => 'required'
  ],
  [
  'field' => 'txtCountry',
  'label' => 'Country',
  'rules' => 'required'
  ],
  [
  'field' => 'txtPostal',
  'label' => 'Postal Code',
  'rules' => 'required'
  ],
  [
  'field' => 'txtPhone',
  'label' => 'Phone',
  'rules' => 'required'
  ]
  // [
  // 'field' => 'userfile',
  // 'label' => 'Image',
  // 'rules' => 'required'
  // ]
  ],
  'devices_at_shops_form_rules' => [
  [
  'field' => 'ddDevice',
  'label' => 'Device',
  'rules' => 'required'
  ],
  [
  'field' => 'ddShop',
  'label' => 'Shop',
  'rules' => 'required'
  ]
  ],
  'shop_timing' => [
    [
       'field' => 'shift',
       'label' => 'Shifting Time',
       'rules' => 'required' 
    ],
    [
      'field' => 'start_time',
      'label' => 'Start Time',
      'rules' => 'required'
    ],
    [
      'field' => 'end_time',
      'label' => 'End Time',
      'rules' => 'required' 
    ] 
  ],
  'Shops_users_rules' => [
   [
    'field' => 'shops',
  'label' => 'Shops',
  'rules' => 'required'

    ],
     [
    'field' => 'users',
  'label' => 'User',
  'rules' => 'required'

    ]
  ],
  'Booking_Request_validation' => [[

  'field' => 'ddlDeviceId',
  'label' => 'Device ID',
  'rules' => 'required'
  ]
  ]
];

?>