import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SubscriptionsComponent } from './subscriptions.component';
import { SubscriptionsRoutingModule } from './subscriptions-routing.module';

@NgModule({
  declarations: [SubscriptionsComponent],
  imports: [CommonModule, SubscriptionsRoutingModule],
})
export class SubscriptionsModule {}
