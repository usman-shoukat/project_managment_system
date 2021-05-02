import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { EditSubscriptionComponent } from './edit-subscription.component';
import { EditSubscriptionRoutingModule } from './edit-subscription-routing.module';
import { NgSelect2Module } from 'ng-select2';

@NgModule({
  declarations: [ EditSubscriptionComponent ],
  imports: [
    CommonModule,
    EditSubscriptionRoutingModule,
    NgSelect2Module
  ]
})
export class EditSubscriptionModule { }
