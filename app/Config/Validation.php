<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

    public $role = [
        'role_name' => [
            'label'  => 'Role Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role Name field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Role Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role desciption field is required.'
            ]
        ],

        'function_id' => [
            'label'  => 'Landing Page',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Landing Page field is required.'
            ]
        ],
    ];

	public $user = [
        'lastname' => [
            'label'  => 'Lastname',
            'rules'  => 'required|alpha_space',
            'errors' => [
                'required' => 'Lastname field is required.',
                'alpha_space' => 'Lastname must not have numbers.'
            ]
        ],
        'firstname' => [
            'label'  => 'Firstname',
            'rules'  => 'required|alpha_space',
            'errors' => [
                'required' => 'Firstname field is required.',
                'alpha_space' => 'Lastname must not have numbers.'
            ]
        ],
        'username' => [
            'label'  => 'Username',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Username field is required.'
            ]
        ],
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email',
            'errors' => [
                'required' => 'Email field is required.',
                'valid_email' => 'You must provide a valid email address.'
            ]
        ],
        'password' => [
            'label'  => 'Password',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Password field is required.',
                // 'regex_match' => 'Password field must contain correct format e.g. AA12qwerty.',
								// |regex_match[^(?=.*[A-Z])(?=.*[a-z].*[a-z].*[a-z])(?=.*[0-9].*[0-9]).{20}$]
            ]
        ],

        'password_retype' => [
            'label'  => 'Password Retype',
            'rules'  => 'required|matches[password]',
            'errors' => [
                'required' => 'Password field is required.',
                'matches' => 'Password Retype field must match password.'
            ]
        ],
        'birthdate' => [
            'label'  => 'Birthdate',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Birthdate field is required.'
            ]
        ],
        'role_id' => [
            'label'  => 'Role',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role field is required.'
            ]
        ],

    ];

    public $user_edit = [
        'lastname' => [
            'label'  => 'Lastname',
            'rules'  => 'required|alpha_space',
            'errors' => [
                'required' => 'Lastname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'firstname' => [
            'label'  => 'Firstname',
            'rules'  => 'required|alpha_space',
            'errors' => [
                'required' => 'Firstname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'username' => [
            'label'  => 'Username',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Username field is required.'
            ]
        ],
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email',
            'errors' => [
                'required' => 'Email field is required.',
                'valid_email' => 'You must provide a valid email address.'
            ]
        ],

        'password_retype' => [
            'label'  => 'Password Retype',
            'rules'  => 'matches[password]',
            'errors' => [
                'required' => 'Password field is required.',
                'matches' => 'Password Retype field must match password.'
            ]
        ],

        'birthdate' => [
            'label'  => 'Birthdate',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Birthdate field is required.'
            ]
        ],
        'role_id' => [
            'label'  => 'Role',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role field is required.'
            ]
        ],

    ];

		public $patient = [

						'full_name' => [
								'label'  => 'First Name',
								'rules'  => 'required',
								'errors' => [
										'required' => 'First Name field is required.',
								]
						],

						'birthdate' => [
								'label'  => 'Birth Date',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Birth Date field is required.'
								]
						],

						'gender' => [
								'label'  => 'Gender',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Gender field is required.'
								]
						],

						'user_type' => [
								'label'  => 'Patient Status',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Patient Status field is required.'
								]
						],

						'email' => [
								'label'  => 'Email Address',
								'rules'  => 'required|valid_email',
								'errors' => [
										'required' => 'Email Address field is required.',
										'valid_email' => 'Email Address is incorrect format.',
										'is_unique' => 'The Email Address field must contain a unique email.'
								]
						],

						'cellphone_no' => [
								'label'  => 'Contact No.',
								'rules'  => 'required|numeric|regex_match[((^(\+)(\d){12}$)|(^\d{11}$))]',
								'errors' => [
										'required' => 'Contact No. field is required.',
										'numeric' => 'Contact No. field do not accept letters.',
										'is_unique' => 'The Contact Number field must contain a unique number.'
								]
						],

						// 'landline_no' => [
						// 		'label'  => 'Landline No.',
						// 		'rules'  => 'required|numeric',
						// 		'errors' => [
						// 				'required' => 'Contact No. field is required.',
						// 				'numeric' => 'Landline No. field do not accept letters.'
						// 		]
						// ],

						'address' => [
								'label'  => 'Address',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Address field is required.'
								]
						],

						'city' => [
								'label'  => 'City',
								'rules'  => 'required',
								'errors' => [
										'required' => 'City field is required.'
								]
						],

						'province' => [
								'label'  => 'Province',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Province field is required.'
								]
						],

						'postal' => [
								'label'  => 'Postal',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Postal field is required.'
								]
						],

       ];
			 public $checklists = [

		 						'temperature' => [
		 								'label'  => 'temperature',
		 								'rules'  => 'required|min_length[2]|max_length[5]|numeric',
		 								'errors' => [
		 										'required' => '* This temperature field is required.',
		 										'numeric' => '* This temperature field is not accept letters.',
		 								]
		 						],

		 						'department' => [
		 								'label'  => 'department',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => '* This field is required.'
		 								]
		 						],

		 						'one_a' => [
		 								'label'  => 'A',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => '* This question A. is required.',
		 								]
		 						],

		 						'one_b' => [
		 								'label'  => 'B',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => '* This question B. is required.',
		 								]
		 						],

		 						'one_c' => [
		 								'label'  => 'C',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => '* This question C. is required.',
		 								]
		 						],

		 						'one_d' => [
		 								'label'  => 'D',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => '* This question D. is required.',
		 								]
		 						],

		 						'one_e' => [
		 								'label'  => 'E',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => '* This question E. is required.',
		 								]
		 						],

		 						'one_f' => [
		 								'label'  => 'F',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => '* This question F. is required.',
		 								]
		 						],

		 						'two_travel' => [
		 								'label'  => 'Travel',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => '* This travel history is required.',
		 								]
		 						],

		 						'three_contact_one' => [
		 								'label'  => 'Close Contact',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => '* This question no. 3 is required.',
		 								]
		 						],

		 						'three_contact_two' => [
		 								'label'  => 'Close Contact',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => '* This question no. 3 is required.',
		 								]
		 						],

		 						'three_contact_three' => [
		 								'label'  => 'Close Contact',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => '* This question no. 3 is required.',
		 								]
		 						],

		 						'three_contact_four' => [
		 								'label'  => 'Close Contact',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => '* This question no. 3 is required.',
		 								]
		 						],

		 						'four_existing' => [
		 								'label'  => 'Existing',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => '* This question no. 4 is required.',
		 								]
		 						],

		 						'five_pregnant' => [
		 								'label'  => 'Existing',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => '* This question no. 5 is required.',
		 								]
		 						],

		        ];
			 public $check = [

		 						'status_defined' => [
		 								'label'  => 'Guests Status',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => 'Assessment is required.',
		 								]
		 						],
		        ];
			 public $guests = [

		 						'date' => [
		 								'label'  => 'Date',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => 'Date is required.',
		 								]
		 						],
		 						'user_type' => [
		 								'label'  => 'Patient Status',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => 'Assessment is required.',
		 								]
		 						],
		 						'gender' => [
		 								'label'  => 'Patient Status',
		 								'rules'  => 'required',
		 								'errors' => [
		 										'required' => 'Assessment is required.',
		 								]
		 						],
		        ];
	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
