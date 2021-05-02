import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { DataTablesModule } from 'angular-datatables';
import { PaymentsComponent } from './payments.component';
import { PaymentsRoutingModule } from './payments-routing.module';

@NgModule({
  declarations: [PaymentsComponent],
  imports: [
    CommonModule,
    DataTablesModule,
    PaymentsRoutingModule,    
  ]
})
export class PaymentsModule { }
