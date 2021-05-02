import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AddSubscriptionComponent } from './add-subscription.component';
import { AddSubscriptionRoutingModule } from './add-subscription-routing.module';
import { NgSelect2Module } from 'ng-select2';

@NgModule({
  declarations: [ AddSubscriptionComponent ],
  imports: [
    CommonModule,
    AddSubscriptionRoutingModule,
    NgSelect2Module
  ]
})
export class AddSubscriptionModule { }
