import { Component, OnInit } from '@angular/core';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-wallet',
  templateUrl: './wallet.component.html',
  styleUrls: ['./wallet.component.css'],
})
export class WalletComponent implements OnInit {
  transactions;
  constructor(public commonService: CommonServiceService) {}

  ngOnInit(): void {
    this.getTransactions();
  }
  getTransactions() {
    this.commonService.getTransactions().subscribe((res) => {
      this.transactions = res;
    });
  }
}
