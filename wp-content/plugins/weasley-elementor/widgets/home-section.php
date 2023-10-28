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
class BdevsHomeSection extends \Elementor\Widget_Base {

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
		return 'bdevs-home-section';
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
		return __( 'Home Section', 'bdevs-elementor' );
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
		return [ 'homesection', 'carousel' ];
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
			'section_content_home_section',
			[
				'label' => esc_html__( 'Home Section', 'bdevs-elementor' ),
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
				'default'     => __( "I'm Ron a Creative", 'bdevs-elementor' ),
				'label_block' => true,
			]	
		);
		$this->add_control(
			'title_color',
			[
				'label'       => __( 'Title Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your title color', 'bdevs-elementor' ),
				'default'     => __( 'Developer & UI Expert', 'bdevs-elementor' ),
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
			'show_exp',
			[
				'label'       => esc_html__( 'Show Exp', 'bdevs-elementor' ),
				'type'        => Controls_Manager::SWITCHER,
				'label_on' 	  => esc_html__( 'Show', 'bdevs-elementor' ),
				'label_off'   => esc_html__( 'Hide', 'bdevs-elementor' ),
				'return_value' => 'yes',
				'default' 	  => 'yes',
			]	
		);
		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Home Section Exp Item', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide #1', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'num_item',
						'label'       => esc_html__( 'Number Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'text_item',
						'label'       => esc_html__( 'Text Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
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
		$this->add_control(
			'image',
			[
				'label'       => esc_html__( 'Image Right Section', 'bdevs-elementor' ),
				'type'        => Controls_Manager::MEDIA,
				'dynamic'     => [ 'active' => true ],
				'label_block' => true,
				'description' => esc_html__( 'Upload image right section', 'bdevs-elementor' ),
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

<section class="home-section">
	<div class="container">
		<div class="row min-vh-100 align-items-center gy-5">
			<?php if ('' != $settings['image']['url']) { ?>
				<div class="col-lg-7 pe-lg-5">
			<?php } else { ?>
				<div class="col-lg-12 pe-lg-5">
			<?php } ?>
					<div class="home-intro">
						<?php if ('' != $settings['heading']): ?>
							<h6><?php echo wp_kses_post($settings['heading']); ?></h6>
						<?php endif ?>
						<h2>
							<?php if ('' != $settings['title']): ?>
								<?php echo wp_kses_post($settings['title']); ?>
							<?php endif ?>
							<?php if ('' != $settings['title_color']): ?>
								<span class="text-theme"><?php echo wp_kses_post($settings['title_color']); ?></span>
							<?php endif ?>
						</h2>
						<?php if ('' != $settings['content']): ?>
							<p><?php echo wp_kses_post($settings['content']); ?></p>
						<?php endif ?>
						<?php if ('yes' === $settings['show_exp']): ?>
							<div class="hs-exp">
								<?php
								foreach ( $settings['tabs'] as $item ) :
								?>
									<div class="exp-box">
										<?php if ('' != $item['num_item']): ?>
											<h5><?php echo wp_kses_post($item['num_item']); ?></h5>
										<?php endif ?>
										<?php if ('' != $item['text_item']): ?>
											<span><?php echo wp_kses_post($item['text_item']); ?></span>
										<?php endif ?>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif ?>
						<?php if (('' != $settings['link_btn']) && ('' != $settings['text_btn'])): ?>
							<div class="btn-bar">
								<a class="link-effect" href="<?php echo wp_kses_post($settings['link_btn']); ?>">
									<?php echo wp_kses_post($settings['text_btn']); ?>
								</a>
							</div>
						<?php endif ?>
					</div>
				</div>
			<?php if ('' != $settings['image']['url']): ?>
				<div class="col-lg-5">
					<div class="home-image">
						<img src="<?php echo wp_kses_post($settings['image']['url']); ?>" >
					</div>
				</div>
			<?php endif ?>
		</div>
	</div>
</section>

<?php
}

}