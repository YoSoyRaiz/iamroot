<?php
namespace BdevsElementor\Widget;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

/**
 * Bdevs Elementor Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class BdevsHomeSection2 extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Bdevs Elementor widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'bdevs-home-section-2';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Bdevs Elementor widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Home Section 2', 'bdevs-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bdevs Slider widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-info-circle';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Bdevs Slider widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'bdevs-elementor' ];
	}

	public function get_keywords() {
		return [ 'homesection2', 'carousel' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	// BDT Position
	protected function element_pack_position() {
		$position_options = [
			''              => esc_html__('Default', 'bdevs-elementor'),
			'top-left'      => esc_html__('Top Left', 'bdevs-elementor') ,
			'top-center'    => esc_html__('Top Center', 'bdevs-elementor') ,
			'top-right'     => esc_html__('Top Right', 'bdevs-elementor') ,
			'center'        => esc_html__('Center', 'bdevs-elementor') ,
			'center-left'   => esc_html__('Center Left', 'bdevs-elementor') ,
			'center-right'  => esc_html__('Center Right', 'bdevs-elementor') ,
			'bottom-left'   => esc_html__('Bottom Left', 'bdevs-elementor') ,
			'bottom-center' => esc_html__('Bottom Center', 'bdevs-elementor') , 
			'bottom-right'  => esc_html__('Bottom Right', 'bdevs-elementor') ,
		];

		return $position_options;
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_content_home_section_2',
			[
				'label' => esc_html__( 'Home Section 2', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'image',
			[
				'label'       => esc_html__( 'Image Banner Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::MEDIA,
				'dynamic'     => [ 'active' => true ],
				'label_block' => true,
				'description' => esc_html__( 'Upload image banner section', 'bdevs-elementor' ),
			]	
		);
		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'Introduction', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your title', 'bdevs-elementor' ),
				'default'     => __( "I'm Ron Weasley", 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'title_color',
			[
				'label'       => __( 'Title Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your title color', 'bdevs-elementor' ),
				'default'     => __( 'a Creative', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'text_decoration',
			[
				'label'       => __( 'List Text Decoration', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your list text', 'bdevs-elementor' ),
				'default'     => __( "'Designer','Developer'", 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'content',
			[
				'label'       => __( 'Content', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your content', 'bdevs-elementor' ),
				'default'     => __( 'I design and develop services for customers...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'link_btn',
			[
				'label'       => __( 'Link Button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your link button', 'bdevs-elementor' ),
				'default'     => __( '#', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'text_btn',
			[
				'label'       => __( 'Text Button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your text button', 'bdevs-elementor' ),
				'default'     => __( 'Browse Resume <i class="bi bi-arrow-up-right"></i>', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		
		
		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_layout',
			[
				'label' => esc_html__( 'Layout', 'bdevs-elementor' ),
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label'   => esc_html__( 'Alignment', 'bdevs-elementor' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-justify',
					],
				],
				'prefix_class' => 'elementor%s-align-',
				'description'  => 'Use align to match position',
				'default'      => 'left',
			]
		);



		$this->end_controls_section();

	}

	public function render() {

		$settings  = $this->get_settings_for_display();
		extract($settings);
		?> 

<section class="home-section-02">
	<div class="container">
		<div class="row min-vh-100 align-items-center">
			<?php if ('' != $settings['image']['url']): ?>	
				<div class="col-left">
					<div class="home-image">
						<div class="home-image-in">
							<img src="<?php echo wp_kses_post($settings['image']['url']); ?>" title="" alt="">
						</div>
					</div>
				</div>
			<?php endif ?>
			<div class="col-right">
				<div class="home-intro">
					<?php if ('' != $settings['heading']): ?>
						<h6><?php echo wp_kses_post($settings['heading']); ?></h6>
					<?php endif ?>
					<h2>
						<?php echo wp_kses_post($settings['title']); ?>
						<span class="text-theme"><?php echo wp_kses_post($settings['title_color']); ?>
							<span class="text-theme" id="type-it"></span>
						</span>
					</h2>
					<?php if ('' != $settings['content']): ?>
						<p><?php echo wp_kses_post($settings['content']); ?></p>
					<?php endif ?>
					<?php if (('' != $settings['link_btn']) && ('' != $settings['text_btn'])): ?>
						<div class="btn-bar">
							<a class="px-btn px-btn-primary" href="<?php echo wp_kses_post($settings['link_btn']); ?>">
								<?php echo wp_kses_post($settings['text_btn']); ?>
							</a>
						</div>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	jQuery( document ).ready(function() {
		new TypeIt('#type-it', {
			speed: 200,
			loop:true,
			strings: [
				<?php echo wp_kses_post($settings['text_decoration']); ?>
			],
			breakLines: false
		}); 
	});
</script>

<?php
}

}