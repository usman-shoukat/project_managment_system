import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { NotificationsRoutingModule } from './notifications-routing.module';
import { Notificationsomponent } from './notifications.component';

@NgModule({
  declarations: [ Notificationsomponent ],
  imports: [CommonModule, NotificationsRoutingModule],
})
export class NotificationsModule {}
