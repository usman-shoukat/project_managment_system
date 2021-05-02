import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { Notificationsomponent } from './notifications.component';

const routes: Routes = [
  {
    path: '',
    component: Notificationsomponent,
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class NotificationsRoutingModule {}
