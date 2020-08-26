@extends('vue.layout')

@section('title', 'Members - Payments')

@section('menu')
    @include('sections.menu')
    @include('sections.profile-nav', ['active' => 'settings'])
@endsection

@push('styles')
<script src="https://js.stripe.com/v3/"></script>
@endpush

@php
$data = [
    'user' => [
        'id' => 1,
        'hasSubscription' => true,
        'isActive' => true,
    ],
    'methods' => [
        [
            'id' => 1,
            'default' => true,
            'info' => 'Visa - 4242',
            'expiry' => '12/20',
        ]
    ],
    'payments' => [
        [
            'id' => 1,
            'date' => 'August 24, 2020',
            'payment-method' => 'Visa - 4242',
            'type' => 'INITIAL_ORDER',
            'amount' => '$197.00',
        ]
    ],
];
$inputErrors = [
    'methods' => [],
];
// <!--
$ecommercePaymentMethods = <<<'EOT'
{
  "data": [
    {
      "type": "paymentMethod",
      "id": "167705",
      "attributes": {
        "currency": "USD",
        "note": null,
        "deleted_at": null,
        "created_at": "2020-08-24 09:39:13",
        "updated_at": "2020-08-24 09:39:13"
      },
      "relationships": {
        "method": {
          "data": {
            "type": "creditCard",
            "id": "116689"
          }
        },
        "userPaymentMethod": {
          "data": {
            "type": "userPaymentMethod",
            "id": "153517"
          }
        },
        "billingAddress": {
          "data": {
            "type": "address",
            "id": "232254"
          }
        }
      }
    },
    {
      "type": "paymentMethod",
      "id": "167706",
      "attributes": {
        "currency": "USD",
        "note": null,
        "deleted_at": null,
        "created_at": "2020-08-26 11:41:47",
        "updated_at": "2020-08-26 11:41:47"
      },
      "relationships": {
        "method": {
          "data": {
            "type": "paypalBillingAgreement",
            "id": "51016"
          }
        },
        "userPaymentMethod": {
          "data": {
            "type": "userPaymentMethod",
            "id": "153518"
          }
        },
        "billingAddress": {
          "data": {
            "type": "address",
            "id": "232255"
          }
        }
      }
    },
    {
      "type": "paymentMethod",
      "id": "167707",
      "attributes": {
        "currency": "USD",
        "note": null,
        "deleted_at": null,
        "created_at": "2020-08-26 13:18:57",
        "updated_at": "2020-08-26 13:18:57"
      },
      "relationships": {
        "method": {
          "data": {
            "type": "creditCard",
            "id": "116690"
          }
        },
        "userPaymentMethod": {
          "data": {
            "type": "userPaymentMethod",
            "id": "153519"
          }
        },
        "billingAddress": {
          "data": {
            "type": "address",
            "id": "232256"
          }
        }
      }
    }
  ],
  "included": [
    {
      "type": "user",
      "id": "150259",
      "attributes": {
        "email": "bogdan.damian@artsoft-consult.ro"
      }
    },
    {
      "type": "creditCard",
      "id": "116689",
      "attributes": {
        "fingerprint": "foTrVrAKbOYoo8wA",
        "last_four_digits": 4242,
        "cardholder_name": null,
        "company_name": "Visa",
        "expiration_date": "2020-12-24 09:39:13",
        "external_id": "card_1HJc8uKoDqdTNxK1X67kNSoE",
        "external_customer_id": "cus_HtOwHCqvQ2Dl5R",
        "payment_gateway_name": "drumeo",
        "created_at": "2020-08-24 09:39:13",
        "updated_at": "2020-08-24 09:39:13"
      }
    },
    {
      "type": "userPaymentMethod",
      "id": "153517",
      "attributes": {
        "is_primary": false,
        "created_at": "2020-08-24 09:39:13",
        "updated_at": "2020-08-26 11:41:47"
      },
      "relationships": {
        "user": {
          "data": {
            "type": "user",
            "id": "150259"
          }
        }
      }
    },
    {
      "type": "address",
      "id": "232254",
      "attributes": {
        "type": "billing",
        "brand": "drumeo",
        "first_name": "",
        "last_name": "",
        "street_line_1": "",
        "street_line_2": "",
        "city": "",
        "zip": "",
        "region": "",
        "country": "United States",
        "note": null,
        "created_at": "2020-08-24 09:39:13",
        "updated_at": "2020-08-24 09:39:13",
        "deleted_at": null
      },
      "relationships": {
        "user": {
          "data": {
            "type": "user",
            "id": "150259"
          }
        }
      }
    },
    {
      "type": "paypalBillingAgreement",
      "id": "51016",
      "attributes": {
        "external_id": "B-1B37121026926243L",
        "payment_gateway_name": "drumeo",
        "created_at": "2020-08-26 11:41:47",
        "updated_at": "2020-08-26 11:41:47"
      }
    },
    {
      "type": "userPaymentMethod",
      "id": "153518",
      "attributes": {
        "is_primary": false,
        "created_at": "2020-08-26 11:41:47",
        "updated_at": "2020-08-26 13:18:58"
      },
      "relationships": {
        "user": {
          "data": {
            "type": "user",
            "id": "150259"
          }
        }
      }
    },
    {
      "type": "address",
      "id": "232255",
      "attributes": {
        "type": "billing",
        "brand": "drumeo",
        "first_name": "",
        "last_name": "",
        "street_line_1": "",
        "street_line_2": "",
        "city": "",
        "zip": "",
        "region": "",
        "country": "United States",
        "note": null,
        "created_at": "2020-08-26 11:41:47",
        "updated_at": "2020-08-26 11:41:47",
        "deleted_at": null
      },
      "relationships": {
        "user": {
          "data": {
            "type": "user",
            "id": "150259"
          }
        }
      }
    },
    {
      "type": "creditCard",
      "id": "116690",
      "attributes": {
        "fingerprint": "p1raZanLcARD5xTT",
        "last_four_digits": 4444,
        "cardholder_name": null,
        "company_name": "MasterCard",
        "expiration_date": "2021-11-26 13:18:57",
        "external_id": "card_1HKOWNKoDqdTNxK1di4V1Koc",
        "external_customer_id": "cus_HtOwHCqvQ2Dl5R",
        "payment_gateway_name": "drumeo",
        "created_at": "2020-08-26 13:18:57",
        "updated_at": "2020-08-26 13:18:57"
      }
    },
    {
      "type": "userPaymentMethod",
      "id": "153519",
      "attributes": {
        "is_primary": true,
        "created_at": "2020-08-26 13:18:58",
        "updated_at": "2020-08-26 13:18:58"
      },
      "relationships": {
        "user": {
          "data": {
            "type": "user",
            "id": "150259"
          }
        }
      }
    },
    {
      "type": "address",
      "id": "232256",
      "attributes": {
        "type": "billing",
        "brand": "drumeo",
        "first_name": "",
        "last_name": "",
        "street_line_1": "",
        "street_line_2": "",
        "city": "",
        "zip": "",
        "region": "",
        "country": "United States",
        "note": null,
        "created_at": "2020-08-26 13:18:57",
        "updated_at": "2020-08-26 13:18:57",
        "deleted_at": null
      },
      "relationships": {
        "user": {
          "data": {
            "type": "user",
            "id": "150259"
          }
        }
      }
    }
  ]
}
EOT;
// -->
@endphp

@section('app')
    <div class="mx-auto w-full container pt-8 lg:pl-3 h-full flex flex-row">
        @include('sections.profile-sidenav', ['active' => 'payments'])

        <div class="flex-1 flex flex-col">
            <div class="p-8 border-b border-gray">
                <h1 class="leading-none text-3xl font-bold capitalize">payment details</h1>
            </div>

            @include(
                'sections.profile.payment-methods',
                [
                    'data' => $data['methods'],
                    'preloadData' => $ecommercePaymentMethods,
                    'user' => $data['user'],
                    'errors' => $inputErrors['methods'],
                    'form' => [],
                    'stripePublishableKey' => 'pk_test_8WbVpdVKKttr3iqIdiT932ME',
                ]
            )

            @include(
                'sections.profile.payment-history',
                [
                    'data' => $data['payments'],
                ]
            )
        </div>
    </div>
@endsection
