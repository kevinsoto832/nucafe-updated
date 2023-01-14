// Set flag to include Preflight conditionally based on the build target.
const includePreflight = ( 'editor' === process.env._TW_TARGET ) ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require( './tailwind-typography.config.js' ),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		'./theme/theme.json',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			dropShadow: {
				'brut': '2px 2px 0px rgba(255, 255, 255, 1)'
			  },
			gridTemplateColumns: {
				// Simple 16 column grid
				'2fr': '2fr 1fr',
			  },

			//font-one & font-two in base.css
			fontFamily: {
				bebas: "bebas-neue-by-fontfabric",
				inria: "Inria Sans",
			},

			colors: {
				"nu-black": "#0F0F0F",
				// "accent": "#212121",
				// "midtone": "#212121",
				// "shadow": "#212121"
			  }
		}
	},
	corePlugins: {
		// Disable Preflight base styles in CSS targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography.
		require( '@tailwindcss/typography' ),

		// Extract colors and widths from `theme.json`.
		require( '@_tw/themejson' )( require( '../theme/theme.json' ) ),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require( '@tailwindcss/aspect-ratio' ),
		//require( '@tailwindcss/forms' ),
		require( 'daisyui' ),
		// require( '@tailwindcss/line-clamp' ),
	],
	daisyui: {
		themes: [
			{ 
				mytheme: {
				//blank background color.
				"base-100": "#202020",
				
				//Text (foreground) color
				"base-content": "#FFFFFF",
				//--n
				"neutral" : "#060606",
				"neutral-content": "#FFFFFF"
				
				}
			},
			"light", 
			"dark", 
			"cupcake",
		],
	  }
};
