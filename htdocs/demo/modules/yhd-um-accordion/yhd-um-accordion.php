<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="yhd-um-accordion"��class���Կ����������Ҫ����ѡ�������壩
 3.��ֹʹ��<style>��ǩ��Ԫ�أ�
 4.��ֹʹ��<script>��ǩ��Ԫ�أ�
 5.��ֹʹ��<link>��ǩ��Ԫ�أ�
 6.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 7.����ʹ��Ԫ������style����
 */
?>
<div class="yhd-um-accordion">
<?php
/**
 * ��ʼ���PHPҳ��
 */
?>
	<div class="J_TWidget accordion1 section" data-widget-type="Accordion" >
		<div class="yhd-switchable-trigger yhd-active"><i class="yhd-icon"></i><h3>����A</h3></div>
		<div class="yhd-switchable-panel">����A</div>
		<div class="yhd-switchable-trigger"><i class="yhd-icon"></i><h3>����B</h3></div>
		<div class="yhd-switchable-panel" style="display:none;">����B</div>
		<div class="yhd-switchable-trigger"><i class="yhd-icon"></i><h3>����C</h3></div>
		<div class="yhd-switchable-panel" style="display:none;">����C</div>
		<div class="yhd-switchable-trigger last-trigger"><i class="yhd-icon"></i><h3>����D</h3></div>
		<div class="yhd-switchable-panel last-panel" style="display:none;">����D</div>
	</div>
</div>
