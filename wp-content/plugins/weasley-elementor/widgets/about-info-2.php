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
class BdevsAboutInfo2 extends \Elementor\Widget_Base {

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
		return 'bdevs-about-info-2';
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
		return __( 'About Info 2', 'bdevs-elementor' );
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
		return 'eicon-user-circle-o';
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
		return [ 'aboutinfo2', 'carousel' ];
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
			'section_content_about_info_2',
			[
				'label' => esc_html__( 'About Info 2', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your title', 'bdevs-elementor' ),
				'default'     => __( 'Title', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'subtitle',
			[
				'label'       => __( 'SubTitle', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your subtitle', 'bdevs-elementor' ),
				'default'     => __( 'SubTitle', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'content',
			[
				'label'       => __( 'Content', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your content', 'bdevs-elementor' ),
				'default'     => __( 'I design and develop services...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'About Text Item', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide #1', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'text_1_item',
						'label'       => esc_html__( 'Text 1 Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'text_2_item',
						'label'       => esc_html__( 'Text 2 Item', 'bdevs-elementor' ),
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
				'placeholder' => __( 'Enter link button', 'bdevs-elementor' ),
				'default'     => __( '#', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'text_btn',
			[
				'label'       => __( 'Text Button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter text button', 'bdevs-elementor' ),
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

<div class="about-me ps-lg-5">
	<?php if ('' != $settings['title']): ?>
		<h4><?php echo wp_kses_post($settings['title']); ?></h4>
	<?php endif ?>
	<?php if ('' != $settings['subtitle']): ?>
		<h6><?php echo wp_kses_post($settings['subtitle']); ?></h6>
	<?php endif ?>
	<?php if ('' != $settings['content']): ?>
		<p><?php echo wp_kses_post($settings['content']); ?></p>
	<?php endif ?>
	<div class="row about-list">
		<div class="col-md-6">
			<?php
			$i = 0;
			foreach ( $settings['tabs'] as $item ) :
				$i++;
			?>
			<?php if ($i % 2 == 1): ?>
				<div class="media">
					<?php if ('' != $item['text_1_item']): ?>
						<label><?php echo wp_kses_post($item['text_1_item']); ?></label>
					<?php endif ?>
					<?php if ('' != $item['text_2_item']): ?>
						<p><?php echo wp_kses_post($item['text_2_item']); ?></p>
					<?php endif ?>
				</div>
			<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div class="col-md-6">
			<?php
			$i = 0;
			foreach ( $settings['tabs'] as $item ) :
				$i++;
			?>
			<?php if ($i % 2 == 0): ?>
				<div class="media">
					<?php if ('' != $item['text_1_item']): ?>
						<label><?php echo wp_kses_post($item['text_1_item']); ?></label>
					<?php endif ?>
					<?php if ('' != $item['text_2_item']): ?>
						<p><?php echo wp_kses_post($item['text_2_item']); ?></p>
					<?php endif ?>
				</div>
			<?php endif ?>
			<?php endforeach; ?>
		</div>
	</div>
	<?php if (('' != $settings['link_btn']) && ('' != $settings['text_btn'])): ?>
		<div class="btn-bar">
			<a class="px-btn px-btn-primary" href="<?php echo wp_kses_post($settings['link_btn']); ?>">
				<?php echo wp_kses_post($settings['text_btn']); ?>
			</a>
		</div>
	<?php endif ?>
</div>

<?php
}

}