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
class BdevsPortfolioSection extends \Elementor\Widget_Base {

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
		return 'bdevs-portfolio-section';
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
		return __( 'Portfolio Section', 'bdevs-elementor' );
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
		return 'eicon-posts-carousel';
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
		return [ 'portfoliosection', 'carousel' ];
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
			'section_content_portfolio_section',
			[
				'label' => esc_html__( 'Portfolio Section', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Portfolio Section Item', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide #1', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'image_item',
						'label'       => esc_html__( 'Image Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::MEDIA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'heading_item',
						'label'       => esc_html__( 'Heading Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'title_item',
						'label'       => esc_html__( 'Title Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'text_1_item',
						'label'       => esc_html__( 'Text Content 1 Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'text_2_item',
						'label'       => esc_html__( 'Text Content 2 Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'text_btn_item',
						'label'       => esc_html__( 'Text Button Item', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
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


<div class="owl-carousel lightbox-gallery" data-items="3" data-nav-dots="true" data-md-items="3" data-sm-items="2" data-xs-items="2" data-xx-items="1" data-space="30" data-autoplay="true" data-loop="false">
	<?php
	$i = 0;
	foreach ( $settings['tabs'] as $item ) :
		$i++;
	?>
		<div class="work-box mb-4">
			<?php if ('' != $item['image_item']['url']): ?>
				<div class="work-img">
					<a class="gallery-link" href="<?php echo wp_kses_post($item['image_item']['url']); ?>">
						<img src="<?php echo wp_kses_post($item['image_item']['url']); ?>" title="" alt="">
					</a>
				</div>
			<?php endif ?>
			<div class="work-info">
				<?php if ('' != $item['heading_item']): ?>
					<div class="meta">
						<span class="text-theme"><?php echo wp_kses_post($item['heading_item']); ?></span>
					</div>
				<?php endif ?>
				<?php if ('' != $item['title_item']): ?>
					<a class="px_modal" href="#work_<?php echo esc_attr($i) ; ?>"><h5><?php echo wp_kses_post($item['title_item']); ?></h5></a>
				<?php endif ?>
				<?php if ('' != $item['text_1_item']): ?>
					<p><?php echo wp_kses_post($item['text_1_item']); ?></p>
				<?php endif ?>
				<?php if ('' != $item['text_btn_item']): ?>
					<div class="btn-bar">
						<a class="px_modal link-effect" href="#work_<?php echo esc_attr($i) ; ?>"><?php echo wp_kses_post($item['text_btn_item']); ?></a>
					</div>
				<?php endif ?>
			</div>
		</div>
	<?php endforeach; ?>
</div>

<?php
$i = 0;
foreach ( $settings['tabs'] as $item ) :
	$i++;
?>
	<div id="work_<?php echo esc_attr($i) ; ?>" class="px-modal mfp-hide">
		<div class="single-blog-box">
			<?php if ('' != $item['image_item']['url']): ?>
				<div class="single-blog-img">
					<img src="<?php echo wp_kses_post($item['image_item']['url']); ?>">
				</div>
			<?php endif ?>
			<div class="single-blog-content">
				<?php if ('' != $item['title_item']): ?>
					<h2 class="text-theme"><?php echo wp_kses_post($item['title_item']); ?></h2>
				<?php endif ?>
				<?php if ('' != $item['text_2_item']): ?>
					<?php echo wp_kses_post($item['text_2_item']); ?>
				<?php endif ?>
			</div>

		</div>
	</div>
<?php endforeach; ?>

<?php
if (is_admin()) { ?>
	<script type="text/javascript">
	var owlslider = $("div.owl-carousel");
	owlslider.each(function () {
		var $this = $(this),
			$items = ($this.data('items')) ? $this.data('items') : 1,
			$loop = ($this.attr('data-loop')) ? $this.data('loop') : true,
			$navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : false,
			$navarrow = ($this.data('nav-arrow')) ? $this.data('nav-arrow') : false,
			$autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
			$autospeed = ($this.attr('data-autospeed')) ? $this.data('autospeed') : 5000,
			$smartspeed = ($this.attr('data-smartspeed')) ? $this.data('smartspeed') : 1000,
			$autohgt = ($this.data('autoheight')) ? $this.data('autoheight') : false,
			$CenterSlider = ($this.data('center')) ? $this.data('center') : false,
			$space = ($this.attr('data-space')) ? $this.data('space') : 30;    
 
			$(this).owlCarousel({
				loop: $loop,
				items: $items,
				responsive: {
					0:{items: $this.data('xx-items') ? $this.data('xx-items') : 1},
					480:{items: $this.data('xs-items') ? $this.data('xs-items') : 1},
					768:{items: $this.data('sm-items') ? $this.data('sm-items') : 1},
					980:{items: $this.data('md-items') ? $this.data('md-items') : 1},
					1200:{items: $items}
				},
				dots: $navdots,
				autoplayTimeout:$autospeed,
				smartSpeed: $smartspeed,
				autoHeight:$autohgt,
				center:$CenterSlider,
				margin:$space,
				nav: $navarrow,
				navText:["<i class='ti-arrow-left'></i>","<i class='ti-arrow-right'></i>"],
				autoplay: $autoplay,
				autoplayHoverPause: true   
			}); 
	}); 

	if($(".lightbox-gallery").exists()){
		$('.lightbox-gallery').magnificPopup({
				delegate: '.gallery-link',
				type: 'image',
				tLoading: 'Loading image #%curr%...',
				mainClass: 'mfp-fade',
				fixedContentPos: true,
				closeBtnInside: false,
				gallery: {
					enabled: true,
					navigateByImgClick: true,
					preload: [0, 1] // Will preload 0 - before current, and 1 after WEA current image
				}
		}); 
	}
	if ($(".popup-youtube, .popup-vimeo, .popup-gmaps").exists()) {
		$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
	}
	if ($(".px_modal").exists()) {
		$('.px_modal').magnificPopup({
			type: 'inline',
			midClick: true,
			mainClass: 'mfp-fade'
		});
	}
	</script>
<?php } ?>

<?php
}

}