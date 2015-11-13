<?php
/*
/*
/* Template Name: funding
/*
*/
get_header();
?>

<script>
	  jQuery(function() {
		$( "#slider" ).slider({
			range: "min",
			value: 170000000,
			min: 10000000,
			step: 10000000,
			max:  500000000,
			slide: function( event, ui ) {
				$( "#amount_1a" ).val( "" + ui.value );
			}
			,change:function(){EMI_calc()}
		});
		$( "#amount_1a" ).val( "" + $( "#slider" ).slider( "value" ) );
		$( "#slideryear" ).slider({
			range: "min",
			value: 2,
			min: 1,
			step: 1,
			max:  30,
			slide: function( event, ui ) {
				$( "#year" ).val( "" + ui.value );
			}
			,change:function(){EMI_calc1()}
		});
		$( "#amount_1a" ).val( "" + $( "#slider" ).slider( "value" ) );
		$( "#year" ).val( "" + $( "#slideryear" ).slider( "value" ) );
	});
	  function EMI_calc1(){

	  }
	  function EMI_calc(){
		/*var emiPrincipal=jQuery("#amount_1a").val();
		var emiRate=jQuery("#amount_intr").val()/12/100;
		var emiTenure=jQuery("#amount_lt").val()*12;
		var emi=emiPrincipal*emiRate*(Math.pow(1+emiRate,emiTenure)/(Math.pow(1+emiRate,emiTenure)-1));
		jQuery("#emi_monthly span").text(number_format(Math.round(emi)) + " VNĐ");
		jQuery("#total_intr span").text(number_format(Math.round(emi* emiTenure-emiPrincipal)) + " VNĐ");
		jQuery("#total_amt span").text(number_format(Math.round(emi*emiTenure)) + " VNĐ");
		jQuery("#loan_amt span").text(number_format(Math.round(emiPrincipal)) + " VNĐ");
		var month_emi=Math.round(emi);
		var emi_tenure=Math.round(emiTenure);
		var intRate = emiRate * 12 * 100;
		commitData(emiPrincipal,intRate,emiTenure);
		displayBarChart (emiPrincipal,intRate,emiTenure);
		fillrates(emiPrincipal,emiTenure);
		displayPieChart(month_emi,emi_tenure,emiPrincipal);*/
	}
	</script>
<div class="pageHeader">
				<div class="call_us">
					<div class="icon_call"><img src="images/phone.png"></div>
					<ul>
						<li>
							<div class="title_call">CEN Group</div>
							<span>0903.85.99.11</span>
						</li>
						<li>
							<div class="title_call">CTY CPBĐS La Bàn</div>
							<span>0912 961 727</span>
						</li>
						<li>
							<div class="title_call">Sàn GD SunLand SG</div>
							<span>0938 779 660</span>
						</li>
						<li>
							<div class="title_call">CTY CPTV TCF Việt Nam</div>
							<span>0908 49 6446</span>
						</li>
						<li>
							<div class="title_call">CTY TNHH Hưng Thịnh Phú</div>
							<span>0934 839 868</span>
						</li>
						<li>
							<div class="title_call">CTY CPBĐS TECHCOMREAL</div>
							<span>0908 06 06 79</span>
						</li>
						<li>
							<div class="title_call">CTY CPTV Đông Nam Á</div>
							<span>0909 333 447</span>
						</li>
						<li>
							<div class="title_call">CTY CPMG BĐS VÂN HÀ</div>
							<span>0906 684 499</span>
						</li>
					</ul>
				</div>				
				<div class="titleBar">
					<h1>Hỗ trợ tài chính</h1>
					<ul>
						<li class="ui_tabs"><span class="Tab1">Giới thiệu</span></li>
						<li class="ui_tabs"><span class="Tab2">Bảng tính tiến độ thanh toán</span></li>
						<li class="ui_tabs active"><span class="Tab3">Bảng tính lãi vay ngân hàng</span></li>
					</ul>  
				</div>
			</div>
			<div class="post_content">
				<div class="container">
					<div id="Tab1" class="content_tab" style="display:none;">
						
					</div><!-- end tab1 -->
					<div id="Tab2" class="content_tab" style="display:none;">					
											
					</div><!-- end tab2 -->
					<div id="Tab3" class="content_tab funding">
						<div class="calculate">
							<div class="leftCol">
								<h4>Hỗ trợ tài chính</h4>
								<img src="images/vietinbank.png">
							</div>
							<div class="rightCol">
								<h4>Đồng hỗ trợ</h4>
								<img src="images/vietcombank.png">
								<img src="images/download.png">
														
							</div>
							<p>
								Công cụ này cho phép khách hàng tính toán được số tiền (cả tiền gốc và tiền lãi) mà họ sẽ phải thanh toán vào một ngày nhất định mà 2 bên đã thỏa thuận trong hợp đồng 					
								Sau khi xác định số tiền vay, tỉ lệ vay , hình thức trả nợ, thời hạn và lãi suất vay, bạn có thể tính toán ngay số tiền trả nợ vay hằng tháng một cách nhanh chóng.	
							</p>
							<div class="calculateForm">
								<div class="form-group">
									<label>Tổng giá trị hợp đồng</label>
									<div class="value">
										<input type="text" onchange="EMI_calc();" id="amount_1a" name="amount_1a" value="0">
									</div>
									<div id="slider"></div>
								</div>
								<div class="form-group">
									<label>Tỷ lệ vay</label>
									<div class="value">
										<input type="text" value="65">
									</div>
								</div>
								<div class="form-group">
									<label>Lãi suất</label>
									<div class="value">
										<input type="text" value="8">
									</div>
								</div>
								<div class="form-group">
									<label>Thời hạn vay</label>
									<div class="value">
										<input type="text" onchange="EMI_calc1();" id="year" name="year" value="2">
									</div>
									<div id="slideryear"></div>
								</div>
								<div class="form-group">
									<label>Ngày giải ngân</label>
									<div class="value">
										<input type="text" class="date" value="09/11/2015">
									</div>
								</div>
							</div>
							
						</div>
						<div id="listRepayment">
	                        <div class="form-horizontal">
	                            <div class="form-group">
	                                <label class="col-sm-6">Số tiền vay</label>
	                                <div class="col-sm-6">
	                                    1.755.000.000 đồng
	                                </div>
	                            </div>
	                        </div>
	                        <div class="table-responsive">
	                            
	                            <table cellpadding="10" border="1" class="table">
	                                <tbody><tr>
	                                    <th class="col1">
	                                        Số kỳ
	                                    </th>
	                                    <th class="col2">
	                                        Ngày trả nợ
	                                    </th>
	                                    <th class="col3">
	                                        Số ngày
	                                    </th>
	                                    <th class="col4">
	                                        Số tiền phải trả hàng tháng
	                                    </th>
	                                    <th class="col5">
	                                        Gốc
	                                    </th>
	                                    <th class="col6">
	                                        Lãi
	                                    </th>
	                                    <th class="col7">
	                                        Số dư nợ còn lại
	                                    </th>
	                                </tr>
	                            
	                                <tr>
	                                    <td class="col1"></td>
	                                    <td class="col2">10/11/2015</td>
	                                    <td class="col3"></td>
	                                    <td class="col4"></td>
	                                    <td class="col5"></td>
	                                    <td class="col6">Giải ngân</td>
	                                    <td class="col7">1.755.000.000</td>
	                                </tr>
	                            
	                                <tr>
	                                    <td class="col1">1</td>
	                                    <td class="col2">10/12/2015</td>
	                                    <td class="col3">30</td>
	                                    <td class="col4">19.012.500</td>
	                                    <td class="col5">7.312.500</td>
	                                    <td class="col6">11.700.000</td>
	                                    <td class="col7">1.747.687.500</td>
	                                </tr>
	                            
	                                <tr>
	                                    <td class="col1">2</td>
	                                    <td class="col2">10/01/2016</td>
	                                    <td class="col3">31</td>
	                                    <td class="col4">19.352.125</td>
	                                    <td class="col5">7.312.500</td>
	                                    <td class="col6">12.039.625</td>
	                                    <td class="col7">1.740.375.000</td>
	                                </tr>
	                            
	                                <tr>
	                                    <td class="col1">3</td>
	                                    <td class="col2">10/02/2016</td>
	                                    <td class="col3">31</td>
	                                    <td class="col4">19.301.750</td>
	                                    <td class="col5">7.312.500</td>
	                                    <td class="col6">11.989.250</td>
	                                    <td class="col7">1.733.062.500</td>
	                                </tr>
	                            
	                                <tr>
	                                    <td class="col1">4</td>
	                                    <td class="col2">10/03/2016</td>
	                                    <td class="col3">29</td>
	                                    <td class="col4">18.481.125</td>
	                                    <td class="col5">7.312.500</td>
	                                    <td class="col6">11.168.625</td>
	                                    <td class="col7">1.725.750.000</td>
	                                </tr>
	                            
	                                <tr>
	                                    <td class="col1">5</td>
	                                    <td class="col2">10/04/2016</td>
	                                    <td class="col3">31</td>
	                                    <td class="col4">19.201.000</td>
	                                    <td class="col5">7.312.500</td>
	                                    <td class="col6">11.888.500</td>
	                                    <td class="col7">1.718.437.500</td>
	                                </tr>
	                            
	                                <tr>
	                                    <td class="col1">6</td>
	                                    <td class="col2">10/05/2016</td>
	                                    <td class="col3">30</td>
	                                    <td class="col4">18.768.750</td>
	                                    <td class="col5">7.312.500</td>
	                                    <td class="col6">11.456.250</td>
	                                    <td class="col7">1.711.125.000</td>
	                                </tr>
	                            
	                                <tr>
	                                    <td class="col1">7</td>
	                                    <td class="col2">10/06/2016</td>
	                                    <td class="col3">31</td>
	                                    <td class="col4">19.100.250</td>
	                                    <td class="col5">7.312.500</td>
	                                    <td class="col6">11.787.750</td>
	                                    <td class="col7">1.703.812.500</td>
	                                </tr>
	                            
	                                <tr>
	                                    <td class="col1">8</td>
	                                    <td class="col2">10/07/2016</td>
	                                    <td class="col3">30</td>
	                                    <td class="col4">18.671.250</td>
	                                    <td class="col5">7.312.500</td>
	                                    <td class="col6">11.358.750</td>
	                                    <td class="col7">1.696.500.000</td>
	                                </tr>
	                            
	                                <tr>
	                                    <td class="col1">9</td>
	                                    <td class="col2">10/08/2016</td>
	                                    <td class="col3">31</td>
	                                    <td class="col4">18.999.500</td>
	                                    <td class="col5">7.312.500</td>
	                                    <td class="col6">11.687.000</td>
	                                    <td class="col7">1.689.187.500</td>
	                                </tr>
	                            
	                                <tr>
	                                    <td class="col1">10</td>
	                                    <td class="col2">10/09/2016</td>
	                                    <td class="col3">31</td>
	                                    <td class="col4">18.949.125</td>
	                                    <td class="col5">7.312.500</td>
	                                    <td class="col6">11.636.625</td>
	                                    <td class="col7">1.681.875.000</td>
	                                </tr>
	                            
	                                <tr>
	                                    <td class="col1">11</td>
	                                    <td class="col2">10/10/2016</td>
	                                    <td class="col3">30</td>
	                                    <td class="col4">18.525.000</td>
	                                    <td class="col5">7.312.500</td>
	                                    <td class="col6">11.212.500</td>
	                                    <td class="col7">1.674.562.500</td>
	                                </tr>
	                            
	                                <tr>
	                                    <td class="col1">12</td>
	                                    <td class="col2">10/11/2016</td>
	                                    <td class="col3">31</td>
	                                    <td class="col4">18.848.375</td>
	                                    <td class="col5">7.312.500</td>
	                                    <td class="col6">11.535.875</td>
	                                    <td class="col7">1.667.250.000</td>
	                                </tr>
	                            
	                                <tr>
	                                    <td class="col1"></td>
	                                    <td class="col2">Tổng số tiền</td>
	                                    <td class="col3"></td>
	                                    <td class="col4"></td>
	                                    <td class="col5">1.755.000.000</td>
	                                    <td class="col6">1.430.333.125</td>
	                                    <td class="col7"></td>
	                                </tr></tbody>
	                            </table>
	                                
	                        </div>
						</div>
						<div class="clearfix"></div>
					</div><!-- end tab3 -->
				</div>
			</div>
<?php get_footer(); ?>
