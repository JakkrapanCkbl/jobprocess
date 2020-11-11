<div class="horizontal-content">

						<div class="page-header">
							<h3 class="page-title"><i class="fe fe-home mr-1"></i>Invoice / Receipt</h3>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Employee Dashboard</li>
							</ol>
						</div>



						<div class="row">
							<div class="col-xl-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Invoice List </h3>
										
										<div class="card-options d-none d-sm-block">
											<div class="btn-group btn-sm">
												<form action="/invoicesearch" method="get">	
													<div class="input-group w-100 p-2">
														<input type="search" name="search" class="form-control " placeholder="Search....">
														<div class="input-group-append ">
															<button type="submit" class="btn btn-primary ">
																<i class="fas fa-search" aria-hidden="true"></i>
															</button>
														</div>
													</div>
												</form>

	
											</div>

										</div>
									</div>
									<div class="card-body">
										<?php if(Session::has('message')): ?>
										    <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
										 <?php endif; ?>
										<div class="table-responsive">
											<table class="table card-table table-vcenter  border text-nowrap">
												<thead>
													<tr>
														
														<th>Invoice No</th>
														<th>Invoice Date</th>
														<th>Customer</th>														
														<th>Discription</th>
														<th>Amount Job</th>
														<th>Receipt No</th>
														<th>Receipt Date</th>
														
														<th><a href="<?php echo e(route('invoice.create')); ?>" class="btn btn-secondary btn-sm"><i class="fe fe-folder-plus "></i> Add</a></th>
													</tr>
												</thead>
												<tbody>
													<?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<tr>
														<td><?php echo e($invoice->invoiceno); ?></td>
														<td><i class="mdi mdi-av-timer text-muted mr-1 num-font"></i><?php echo e(date('d-m-Y', strtotime($invoice->invoicedate))); ?></td>
														<td><?php echo e(Str::limit($invoice->customer, 15)); ?></td>
														<td><?php echo e(Str::substr($invoice->description, -27,27)); ?></td>
														<td><?php echo e($invoice->amountjob); ?></td>
														<td><?php echo e($invoice->receiptno); ?></td>

														<?php if($invoice->receiptdate ==''): ?>         
														      <td></td>        
														<?php else: ?>
														      <td><i class="mdi mdi-av-timer text-muted mr-1 num-font"></i><?php echo e(date('d-m-Y', strtotime($invoice->receiptdate))); ?></td>    
														<?php endif; ?>

														
														<td>
															<a href="<?php echo e(route('invoice.edit',[$invoice->id])); ?>" class="mr-3" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fe fe-edit-2 text-dark fs-16"></i></a>
															<a href="" class="mr-3" data-toggle="tooltip" title="" data-original-title="Check"><i class="fe fe-file text-dark fs-16"></i></a>
															<a href="" class="mr-3" data-toggle="tooltip" title="" data-original-title="Folder"><i class="fe fe-folder-plus text-dark fs-16"></i></a>
															<a href="javascript:void(0)" class="mr-3" title="" data-original-title="Delete" data-toggle="modal" data-target="#exampleModal<?php echo e($invoice->id); ?>"><i class="fe fe-trash-2 text-dark fs-16"></i></a>

															<!-- Modal -->
									                        <div class="modal fade" id="exampleModal<?php echo e($invoice->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									                          <div class="modal-dialog" role="document">
									                            <div class="modal-content">
									                              <div class="modal-header">
									                                  <h5 class="modal-title" id="exampleModalLabel">Delete Invoice</h5>
									                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									                                    <span aria-hidden="true">&times;</span>
									                                  </button>
									                              </div>
									                              <div class="modal-body">Do you want to delete <?php echo e($invoice->id); ?>?</div>                             
									                              <form action="<?php echo e(route('invoice.delete')); ?>" method="POST"><?php echo csrf_field(); ?>
									                                  <div class="modal-footer">
									                                      <input type="hidden" name="id" value="<?php echo e($invoice->id); ?>">
									                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									                                      <button type="submit" class="btn btn-danger">delete</button>
									                                  </div>
									                              </form>
									                            </div>
									                          </div>
									                        </div>
									                        <!-- End Modal -->

														</td>
													</tr>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>											
												</tbody>
											</table>
										</div>
										<?php echo e($invoices->links()); ?>

									</div>
								</div>
							</div>
						</div>
					</div><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/invoice/content1.blade.php ENDPATH**/ ?>