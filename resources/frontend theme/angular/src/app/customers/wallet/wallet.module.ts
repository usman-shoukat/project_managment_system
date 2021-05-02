import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { WalletRoutingModule } from './wallet-routing.module';
import { WalletComponent } from './wallet.component';
import { NgSelect2Module } from 'ng-select2';

@NgModule({
  declarations: [WalletComponent],
  imports: [NgSelect2Module, CommonModule, WalletRoutingModule],
})
export class WalletModule {}
